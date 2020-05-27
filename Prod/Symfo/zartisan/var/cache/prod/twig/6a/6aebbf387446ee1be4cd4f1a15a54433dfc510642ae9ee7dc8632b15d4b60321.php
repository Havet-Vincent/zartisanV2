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

/* @EasyAdmin/default/action.html.twig */
class __TwigTemplate_faae89997699e0ba159fd30345cd20b3fa34ffb153e57d4ba3bdc2915a45d8a6 extends \Twig\Template
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
        echo "<a class=\"";
        echo (((((isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context))) ? (_twig_default_filter(($context["is_dropdown"] ?? null), false)) : (false))) ? ("dropdown-item") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "css_class", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "css_class", [], "any", false, false, false, 1), "")) : ("")), "html", null, true);
        echo "\" title=\"";
        ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "title", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "title", [], "any", false, false, false, 1), "")) : ("")))) ? (print ("")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "title", [], "any", false, false, false, 1), ($context["trans_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true))));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ($context["action_href"] ?? null), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "target", [], "any", false, false, false, 1), "html", null, true);
        echo "\">";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 2)) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 2), "html", null, true);
            echo "\"></i> ";
        }
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", true, true, false, 3) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 3)))) {
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 4), twig_array_merge(($context["trans_parameters"] ?? null), ["%entity_id%" => ($context["item_id"] ?? null)]), ($context["translation_domain"] ?? null)), "html", null, true);
        }
        // line 6
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  57 => 4,  55 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/action.html.twig", "/var/www/html/Zartisan_prod/zartisanV2/Symfo/zartisan/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/action.html.twig");
    }
}
