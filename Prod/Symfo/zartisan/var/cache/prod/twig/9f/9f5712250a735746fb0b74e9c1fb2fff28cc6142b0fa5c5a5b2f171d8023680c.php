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

/* @EasyAdmin/default/filters.html.twig */
class __TwigTemplate_6ed5f8cc5edea97dd56270da2a8e127cbb5bde7a74481d1585bfc41f73be4259 extends \Twig\Template
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
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["filters_form"] ?? null), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), false);
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["filters_form"] ?? null), 'form_start', ["attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filters_form"] ?? null), "vars", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3)]]);
        echo "
    ";
        // line 4
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "get", [0 => "entity"], "method", false, false, false, 4));
        // line 5
        echo "
    <input type=\"hidden\" name=\"action\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["referer_action"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"entity\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "get", [0 => "menuIndex"], "method", false, false, false, 8), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "get", [0 => "submenuIndex"], "method", false, false, false, 9), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "get", [0 => "sortField", 1 => ""], "method", false, false, false, 10), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 11), "get", [0 => "sortDirection", 1 => "DESC"], "method", false, false, false, 11), "html", null, true);
        echo "\">

    ";
        // line 13
        if (("search" == ($context["referer_action"] ?? null))) {
            // line 14
            echo "    <input type=\"hidden\" name=\"query\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 14), "get", [0 => "query"], "method", false, false, false, 14), "html", null, true);
            echo "\">
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["filters_form"] ?? null), 'widget');
        echo "
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["filters_form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/filters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  87 => 17,  84 => 16,  78 => 14,  76 => 13,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/filters.html.twig", "/var/www/html/Zartisan_prod/zartisanV2/Symfo/zartisan/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/filters.html.twig");
    }
}
