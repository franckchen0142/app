<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* driver/driver_photo_add.html.twig */
class __TwigTemplate_ecce15100b2c03e6f68e284915deb6e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "driver/driver_photo_add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "driver/driver_photo_add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "driver/driver_photo_add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Add Driver
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/driverPhoto.js"), "html", null, true);
        echo "\" defer></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"container\">
\t\t<main>

\t\t\t<h1>Driver Profil Photo edit</h1>

\t\t\t<div>
\t\t\t\t<p>Photo Actuelle:</p>
\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 16, $this->source); })()), "photo", [], "any", false, false, false, 16))), "html", null, true);
        echo "\" alt=\"photo\" width=\"150\" id=\"driver-photo-js\">
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 19
        if ((isset($context["galerys"]) || array_key_exists("galerys", $context) ? $context["galerys"] : (function () { throw new RuntimeError('Variable "galerys" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["galerys"]) || array_key_exists("galerys", $context) ? $context["galerys"] : (function () { throw new RuntimeError('Variable "galerys" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["galery"]) {
                // line 21
                echo "\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galery"], "name", [], "any", false, false, false, 23), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["galery"], "images", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 25
                    echo "
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_driver_photo_insert_api", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 26), "driver" => twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
                    echo "\" data-insert data-token=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("insert" . twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 26))), "html", null, true);
                    echo " \">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 27))), "html", null, true);
                    echo "\" alt=\"\" width=\"200\">
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "\t\t\t\t\t\t</article>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "

\t\t\t\t";
        }
        // line 36
        echo "
\t\t\t</div>

\t\t</main>

\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "driver/driver_photo_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 36,  173 => 33,  166 => 31,  156 => 27,  150 => 26,  147 => 25,  143 => 24,  139 => 23,  135 => 21,  130 => 20,  128 => 19,  122 => 16,  113 => 9,  103 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add Driver
{% endblock %}
{% block javascripts %}
\t<script src=\"{{ asset('js/driverPhoto.js') }}\" defer></script>
{% endblock %}
{% block body %}
\t<div class=\"container\">
\t\t<main>

\t\t\t<h1>Driver Profil Photo edit</h1>

\t\t\t<div>
\t\t\t\t<p>Photo Actuelle:</p>
\t\t\t\t<img src=\"{{ asset('uploads/' ~ driver.photo) }}\" alt=\"photo\" width=\"150\" id=\"driver-photo-js\">
\t\t\t</div>
\t\t\t<div>
\t\t\t\t{% if galerys %}
\t\t\t\t\t{% for galery in galerys %}
\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{ galery.name }}</p>
\t\t\t\t\t\t\t{% for image in galery.images %}

\t\t\t\t\t\t\t\t<a href=\"{{ path('app_driver_photo_insert_api',{'id':image.id, 'driver':driver.id}) }}\" data-insert data-token=\"{{ csrf_token('insert' ~ image.id)}} \">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/' ~ image.name) }}\" alt=\"\" width=\"200\">
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</article>
\t\t\t\t\t{% endfor %}


\t\t\t\t{% endif %}

\t\t\t</div>

\t\t</main>

\t</div>
{% endblock %}
", "driver/driver_photo_add.html.twig", "/home/chennuo/Code/app.paris-prestige-transfert.fr/templates/driver/driver_photo_add.html.twig");
    }
}
