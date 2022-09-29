<?php

namespace App\Controller;

use App\Entity\Company;
use App\Form\CompanyType;
use App\Repository\CompanyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/gestion')]
class CompanyController extends AbstractController
{
    #[Route('/company', name: 'app_company')]
    public function index(Request $request, CompanyRepository $companyRepository, EntityManagerInterface $manager): Response
    {
        $user = $this->getUser();

        $company = $companyRepository->findOneByUser($user);

        if ($company == null) {
            $company = new Company();
            $company->setUser($user);
        }

        $form = $this->createForm(CompanyType::class, $company);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($company);
            $manager->flush();
        }

        return $this->render('company/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
