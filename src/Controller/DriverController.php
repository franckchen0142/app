<?php

namespace App\Controller;

use App\Entity\Driver;
use App\Entity\Images;
use DateTimeImmutable;
use App\Form\DriverType;
use App\Entity\ImageDefault;
use App\Repository\DriverRepository;
use App\Repository\GaleryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/gestion')]
class DriverController extends AbstractController
{
    #[Route('/driver', name: 'app_driver_index', methods: ['GET'])]
    public function index(DriverRepository $driverRepository): Response
    {
        $drivers = $driverRepository->findBy(['user' => $this->getUser()]);
        dump($drivers);
        return $this->render('driver/index.html.twig', [
            'drivers' => $drivers,
        ]);
    }

    #[Route('/new', name: 'app_driver_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DriverRepository $driverRepository): Response
    {
        $user = $this->getUser();


        $driver = new Driver();
        $form = $this->createForm(DriverType::class, $driver);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $driver->setUser($user)
                ->setPhoto("driver-photo-default.png")
                ->setCreatedAt(new DateTimeImmutable());

            $driverRepository->add($driver, true);

            return $this->redirectToRoute('app_driver_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('driver/new.html.twig', [
            'driver' => $driver,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_driver_show', methods: ['GET'])]
    public function show(Driver $driver): Response
    {
        dump($driver);
        return $this->render('driver/show.html.twig', [
            'driver' => $driver,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_driver_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Driver $driver, DriverRepository $driverRepository): Response
    {
        $form = $this->createForm(DriverType::class, $driver);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $driverRepository->add($driver, true);

            return $this->redirectToRoute('app_driver_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('driver/edit.html.twig', [
            'driver' => $driver,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_driver_delete', methods: ['POST'])]
    public function delete(Request $request, Driver $driver, DriverRepository $driverRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $driver->getId(), $request->request->get('_token'))) {
            $driverRepository->remove($driver, true);
        }

        return $this->redirectToRoute('app_driver_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/{id}/photo_edit', name: 'app_driver_photo_edit', methods: ['POST', 'GET'])]
    public function photo(Driver $driver, GaleryRepository $galeryRepository)
    {

        $galerys = $galeryRepository->findBy(['user' => $this->getUser()]);


        return $this->render('driver/driver_photo_add.html.twig', [

            'driver' => $driver,
            'galerys' => $galerys,

        ]);
    }

    #[Route('/{id}/{driver}/photo_insert', name: 'app_driver_photo_insert_api', methods: ['POST', 'GET'])]
    public function insert(Images $image,  Driver $driver, EntityManagerInterface $manager, Request $request)
    {

        $data = json_decode($request->getContent(), true);

        // On vérifie si le token est valide
        if ($this->isCsrfTokenValid('insert' . $image->getId(), $data['_token'])) {

            $driver->setPhoto($image);
            $manager->persist($driver);
            $manager->flush();


            // On répond en json
            return new JsonResponse([
                'success' => 1,
                'new_src' => '/uploads/' . $image->getName()
            ]);
        } else {
            return new JsonResponse(['error' => 'Token Invalide'], 400);
        }
    }
}
