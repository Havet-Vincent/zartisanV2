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

/* @EasyAdmin/default/includes/_actions.html.twig */
class __TwigTemplate_875608a99dbbc20ddc31d368e76edd5f0ee4539b980b6c7f2f4bf0af515f1ef2 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "    ";
            if (("list" == twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 2))) {
                // line 3
                echo "        ";
                $context["action_href"] = ((((twig_get_attribute($this->env, $this->source, ($context["request_parameters"] ?? null), "referer", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request_parameters"] ?? null), "referer", [], "any", false, false, false, 3), "")) : (""))) ? (urldecode(twig_get_attribute($this->env, $this->source, ($context["request_parameters"] ?? null), "referer", [], "any", false, false, false, 3))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["request_parameters"] ?? null), ["action" => "list"]))));
                // line 4
                echo "    ";
            } elseif (("method" == twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 4))) {
                // line 5
                echo "        ";
                $context["action_href"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["request_parameters"] ?? null), ["action" => twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 5), "id" => ($context["item_id"] ?? null)]));
                // line 6
                echo "    ";
            } elseif (("route" == twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 6))) {
                // line 7
                echo "        ";
                $context["action_href"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 7), twig_array_merge(($context["request_parameters"] ?? null), ["action" => twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 7), "id" => ($context["item_id"] ?? null)]));
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    ";
            // line 10
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "template", [], "any", false, false, false, 10), ["action" =>             // line 11
$context["action"], "action_href" =>             // line 12
($context["action_href"] ?? null), "is_dropdown" => ((            // line 13
(isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context))) ? (_twig_default_filter(($context["is_dropdown"] ?? null), false)) : (false)), "item" =>             // line 14
($context["item"] ?? null), "item_id" =>             // line 15
($context["item_id"] ?? null), "request_parameters" =>             // line 16
($context["request_parameters"] ?? null), "translation_domain" =>             // line 17
($context["translation_domain"] ?? null), "trans_parameters" =>             // line 18
($context["trans_parameters"] ?? null)], false);
            // line 19
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  73 => 18,  72 => 17,  71 => 16,  70 => 15,  69 => 14,  68 => 13,  67 => 12,  66 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  47 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/includes/_actions.html.twig", "/var/www/html/Zartisan_prod/zartisanV2/Symfo/zartisan/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/includes/_actions.html.twig");
    }
}
