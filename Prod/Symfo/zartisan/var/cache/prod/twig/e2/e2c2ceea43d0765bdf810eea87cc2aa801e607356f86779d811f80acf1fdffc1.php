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

/* emails/passMailSend.html.twig */
class __TwigTemplate_9e74649c685ba0fe4ba20919ad67a690ff7375e899a1afcd3117617a931e5129 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    </body>
</html>

";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        ";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            <div><h2>Bienvenue</h2></div>
            <div><p>Afin de valider votre nouveau mot de passe, <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
        echo "?token=";
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "&use=";
        echo twig_escape_filter($this->env, ($context["use"] ?? null), "html", null, true);
        echo "&password=";
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "\"> cliquez ici </a></p></div>
            <div><p>Attention ce lien n'est valable que durant les <strong>3 jours </strong> suivant sa création</p></div>
        ";
    }

    public function getTemplateName()
    {
        return "emails/passMailSend.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  72 => 10,  68 => 9,  64 => 6,  60 => 5,  53 => 14,  51 => 9,  47 => 7,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/passMailSend.html.twig", "/var/www/html/Zartisan_prod/zartisanV2/Symfo/zartisan/templates/emails/passMailSend.html.twig");
    }
}
