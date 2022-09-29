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

/* driver/show.html.twig */
class __TwigTemplate_b6a5c7666ae96a4b629bcbc159f85722 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "driver/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "driver/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "driver/show.html.twig", 1);
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

        echo "Driver
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
        echo "\t<h1>Driver</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Photo</th>
\t\t\t\t<td><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 13, $this->source); })()), "photo", [], "any", false, false, false, 13))), "html", null, true);
        echo "\" alt=\"photo\" width=\"150\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_driver_photo_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\">changer la photo</a>
\t\t\t\t</td>

\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Name</th>
\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>FirstName</th>
\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 27, $this->source); })()), "firstName", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Phone</th>
\t\t\t\t<td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 31, $this->source); })()), "phone", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Email</th>
\t\t\t\t<td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Adress</th>
\t\t\t\t<td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 39, $this->source); })()), "adress", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>City</th>
\t\t\t\t<td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 43, $this->source); })()), "city", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Cp</th>
\t\t\t\t<td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 47, $this->source); })()), "cp", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>CreatedAt</th>
\t\t\t\t<td>";
        // line 51
        ((twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 51, $this->source); })()), "createdAt", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 51, $this->source); })()), "createdAt", [], "any", false, false, false, 51), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_driver_index");
        echo "\">back to list</a>

\t<a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_driver_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\">edit</a>

\t";
        // line 60
        echo twig_include($this->env, $context, "driver/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "driver/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 60,  177 => 58,  172 => 56,  164 => 51,  157 => 47,  150 => 43,  143 => 39,  136 => 35,  129 => 31,  122 => 27,  115 => 23,  108 => 19,  97 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Driver
{% endblock %}

{% block body %}
\t<h1>Driver</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Photo</th>
\t\t\t\t<td><img src=\"{{ asset('uploads/' ~ driver.photo) }}\" alt=\"photo\" width=\"150\"><a href=\"{{ path('app_driver_photo_edit',{id:driver.id}) }}\">changer la photo</a>
\t\t\t\t</td>

\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>{{ driver.id }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Name</th>
\t\t\t\t<td>{{ driver.name }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>FirstName</th>
\t\t\t\t<td>{{ driver.firstName }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Phone</th>
\t\t\t\t<td>{{ driver.phone }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Email</th>
\t\t\t\t<td>{{ driver.email }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Adress</th>
\t\t\t\t<td>{{ driver.adress }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>City</th>
\t\t\t\t<td>{{ driver.city }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Cp</th>
\t\t\t\t<td>{{ driver.cp }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>CreatedAt</th>
\t\t\t\t<td>{{ driver.createdAt ? driver.createdAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('app_driver_index') }}\">back to list</a>

\t<a href=\"{{ path('app_driver_edit', {'id': driver.id}) }}\">edit</a>

\t{{ include('driver/_delete_form.html.twig') }}
{% endblock %}
", "driver/show.html.twig", "/home/chennuo/Code/app.paris-prestige-transfert.fr/templates/driver/show.html.twig");
    }
}
