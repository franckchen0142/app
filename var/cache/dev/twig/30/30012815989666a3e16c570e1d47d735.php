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

/* galery/index.html.twig */
class __TwigTemplate_d271161ddef591e34c345547f441c29b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galery/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galery/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "galery/index.html.twig", 1);
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

        echo "Galery
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>Galery</h1>
\t<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_index");
        echo "\">Retour</a>
\t";
        // line 9
        if ((isset($context["galerys"]) || array_key_exists("galerys", $context) ? $context["galerys"] : (function () { throw new RuntimeError('Variable "galerys" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["galerys"]) || array_key_exists("galerys", $context) ? $context["galerys"] : (function () { throw new RuntimeError('Variable "galerys" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["galery"]) {
                // line 11
                echo "\t\t\t<article>
\t\t\t\tid:";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galery"], "id", [], "any", false, false, false, 12), "html", null, true);
                echo "
\t\t\t\t<a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_galery_add_image", ["id" => twig_get_attribute($this->env, $this->source, $context["galery"], "id", [], "any", false, false, false, 13)]), "html", null, true);
                echo "\">Add images</a>
\t\t\t\t<div>";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galery"], "name", [], "any", false, false, false, 14), "html", null, true);
                echo "</div>

\t\t\t\t";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["galery"], "images", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["galery"], "images", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 18
                        echo "\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 18))), "html", null, true);
                        echo "\" alt=\"Image\" width=\"150\">
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "
\t\t\t\t";
                }
                // line 22
                echo "

\t\t\t</article>


\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "

\t";
        }
        // line 31
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "galery/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 31,  150 => 28,  139 => 22,  135 => 20,  126 => 18,  121 => 17,  119 => 16,  114 => 14,  110 => 13,  106 => 12,  103 => 11,  98 => 10,  96 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Galery
{% endblock %}

{% block body %}
\t<h1>Galery</h1>
\t<a href=\"{{ path('app_gestion_index') }}\">Retour</a>
\t{% if galerys %}
\t\t{% for galery in galerys %}
\t\t\t<article>
\t\t\t\tid:{{  galery.id}}
\t\t\t\t<a href=\"{{ path('app_galery_add_image',{id:galery.id}) }}\">Add images</a>
\t\t\t\t<div>{{ galery.name }}</div>

\t\t\t\t{% if galery.images %}
\t\t\t\t\t{% for image in galery.images %}
\t\t\t\t\t\t<img src=\"{{ asset('/uploads/' ~ image.name) }}\" alt=\"Image\" width=\"150\">
\t\t\t\t\t{% endfor %}

\t\t\t\t{% endif %}


\t\t\t</article>


\t\t{% endfor %}


\t{% endif %}

{% endblock %}
", "galery/index.html.twig", "/home/clients/447674b83d8f647a90c4ba17f68be5d7/sites/app.paris-prestige-transfert.fr/templates/galery/index.html.twig");
    }
}
