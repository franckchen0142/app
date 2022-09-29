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

/* email/password_reset.html.twig */
class __TwigTemplate_e67f3d90fdae34955f27236a16fed06b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/password_reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/password_reset.html.twig"));

        // line 1
        echo "<style>
\t.red {
\t\tcolor: red;
\t}
</style>
<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 6, $this->source); })()), "image", [0 => "@email_images/key.png"], "method", false, false, false, 6), "html", null, true);
        echo "\" alt=\"\">
<p class=\"red\">Bonjour
\t";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
<p>Pour votre demande de réinitialisation de mot de passe, veuillez cliquer sur le lien suivant :
\t<a href=\"";
        // line 10
        echo (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 10, $this->source); })());
        echo "\">";
        echo (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 10, $this->source); })());
        echo "</a>
</p>
<p>Merci</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "email/password_reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  55 => 8,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
\t.red {
\t\tcolor: red;
\t}
</style>
<img src=\"{{ email.image('@email_images/key.png') }}\" alt=\"\">
<p class=\"red\">Bonjour
\t{{ user.email }}</p>
<p>Pour votre demande de réinitialisation de mot de passe, veuillez cliquer sur le lien suivant :
\t<a href=\"{{ url|raw }}\">{{ url|raw }}</a>
</p>
<p>Merci</p>
", "email/password_reset.html.twig", "/home/clients/447674b83d8f647a90c4ba17f68be5d7/sites/app.paris-prestige-transfert.fr/templates/email/password_reset.html.twig");
    }
}
