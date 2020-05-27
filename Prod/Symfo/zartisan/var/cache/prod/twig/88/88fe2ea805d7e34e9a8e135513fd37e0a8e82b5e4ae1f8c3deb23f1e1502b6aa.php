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

/* security/login.html.twig */
class __TwigTemplate_ff9ac5316575c2da2f0ce07b866e794bb4f8d1e48e98c5f856147aa86e7666c9 extends \Twig\Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Z'artisan : Administration";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<form method=\"post\" id=\"form_login\">
    <div class=\"login\">
        <label for=\"inputEmail\"></label>
        <input class=\"bouttonLog\" type=\"email\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"Email\" class=\"form-control\" 
            placeholder=\"Email\" required autofocus> 
        <label for=\"inputPassword\"></label>
        <input class=\"bouttonLog\" type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" 
            placeholder=\"password\" required>
        <input type=\"hidden\" name=\"_csrf_token\"value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"> 
        <input id=\"buttonslog\" type=\"submit\" value=\"Sign In\">
    </div>
    <div class=\"shadow\"></div>
</form>

";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/form_login.css"), "html", null, true);
        echo "\">
";
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "
<script src=\"http://localhost:3000/vendors.js\"></script>
<script src=\"http://localhost:3000/app.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  99 => 27,  93 => 25,  89 => 24,  85 => 23,  74 => 15,  66 => 10,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/var/www/html/Zartisan_prod/zartisanV2/Symfo/zartisan/templates/security/login.html.twig");
    }
}
