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

/* _include/nav.html.twig */
class __TwigTemplate_c8dbcddd5d80f14c2aa80db480205bbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_include/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_include/nav.html.twig"));

        // line 1
        echo "<div class=\"nav-background\">


\t<nav class=\"container\">
\t\t<ul>
\t\t\t<li>

\t\t\t\t<strong>Paris Prestige Transfert</strong>

\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"myLinks\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a>
\t\t\t</li>
\t\t\t";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "\t\t\t\t<li>
\t\t\t\t\t<details role=\"list\" dir=\"rtl\">
\t\t\t\t\t\t<summary aria-haspopup=\"listbox\" role=\"link\">Parametre</summary>
\t\t\t\t\t\t<ul role=\"listbox\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_index");
            echo "\">Profile</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            // line 27
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "isCompany", [], "any", false, false, false, 27)) {
                // line 28
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 29
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_index");
                echo "\">Gestion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 32
            echo "

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</details>
\t\t\t\t</li>

\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">register</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">login</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 49
        echo "

\t\t</ul>
\t</nav>


</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_include/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 49,  118 => 46,  112 => 43,  109 => 42,  99 => 35,  94 => 32,  88 => 29,  85 => 28,  83 => 27,  78 => 25,  71 => 20,  69 => 19,  64 => 17,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nav-background\">


\t<nav class=\"container\">
\t\t<ul>
\t\t\t<li>

\t\t\t\t<strong>Paris Prestige Transfert</strong>

\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"myLinks\">
\t\t\t<li>
\t\t\t\t<a href=\"{{path('app_home')}}\">Accueil</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('app_contact')}}\">Contact</a>
\t\t\t</li>
\t\t\t{% if app.user %}
\t\t\t\t<li>
\t\t\t\t\t<details role=\"list\" dir=\"rtl\">
\t\t\t\t\t\t<summary aria-haspopup=\"listbox\" role=\"link\">Parametre</summary>
\t\t\t\t\t\t<ul role=\"listbox\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_profile_index') }}\">Profile</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% if app.user.isCompany %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_gestion_index') }}\">Gestion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_logout')}}\">Logout</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</details>
\t\t\t\t</li>

\t\t\t{% else %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_register')}}\">register</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_login')}}\">login</a>
\t\t\t\t</li>
\t\t\t{% endif %}


\t\t</ul>
\t</nav>


</div>
", "_include/nav.html.twig", "/home/clients/447674b83d8f647a90c4ba17f68be5d7/sites/app.paris-prestige-transfert.fr/templates/_include/nav.html.twig");
    }
}
