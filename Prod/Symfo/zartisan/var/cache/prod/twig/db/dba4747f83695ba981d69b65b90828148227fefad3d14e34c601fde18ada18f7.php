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

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_e757ab5be1b4f24c7e7a014aa16b46916da88ca6f791301e225b10cccf02861d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
            'show_fields' => [$this, 'block_show_fields'],
            'show_field' => [$this, 'block_show_field'],
            'item_actions' => [$this, 'block_item_actions'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", [], "any", false, false, false, 7), "layout", [], "any", false, false, false, 7), "@EasyAdmin/default/show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "query", [], "any", false, false, false, 1), "get", [0 => "entity"], "method", false, false, false, 1));
        // line 3
        $context["_entity_id"] = ("" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "primary_key_field_name", [], "any", false, false, false, 3), [], "any", false, false, false, 3));
        // line 4
        $context["__internal_474ab466928144aa5094a6e42c77cce71d2d6feeecd7f268fa6962938a7a9e6d"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 4);
        // line 5
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 5), [],         // line 4
($context["__internal_474ab466928144aa5094a6e42c77cce71d2d6feeecd7f268fa6962938a7a9e6d"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 5
($context["_entity_config"] ?? null), "label", [], "any", false, false, false, 5), [],         // line 4
($context["__internal_474ab466928144aa5094a6e42c77cce71d2d6feeecd7f268fa6962938a7a9e6d"] ?? null)), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? null)];
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("easyadmin-show-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 9)) . "-") . ($context["_entity_id"] ?? null)), "html", null, true);
    }

    // line 10
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 10))), "html", null, true);
    }

    // line 12
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        ob_start(function () { return ''; });
        // line 14
        echo "        ";
        $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
        // line 15
        echo "        ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "show", [], "any", false, true, false, 15), "title", [], "any", true, true, false, 15)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "show", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), ($context["_trans_parameters"] ?? null),         // line 4
($context["__internal_474ab466928144aa5094a6e42c77cce71d2d6feeecd7f268fa6962938a7a9e6d"] ?? null))) : (        // line 15
($context["_default_title"] ?? null))), "html", null, true);
        echo "
    ";
        $___internal_12a368bea60530d08d62004616f6812f8cb036d520ed4f94fd679eeca4d5225d_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        echo twig_spaceless($___internal_12a368bea60530d08d62004616f6812f8cb036d520ed4f94fd679eeca4d5225d_);
    }

    // line 19
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <div class=\"form-horizontal\">
        ";
        // line 23
        $this->displayBlock('show_fields', $context, $blocks);
        // line 44
        echo "    </div>

    <section class=\"content-footer\">
        <div class=\"form-actions\">
            ";
        // line 48
        $this->displayBlock('item_actions', $context, $blocks);
        // line 62
        echo "        </div>
    </section>

    ";
        // line 65
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 23
    public function block_show_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "            ";
        $context["_fields_visible_by_user"] = twig_array_filter(($context["fields"] ?? null), function ($__metadata__, $__field__) use ($context, $macros) { $context["metadata"] = $__metadata__; $context["field"] = $__field__; return $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isGranted(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "permission", [], "any", false, false, false, 24)); });
        // line 25
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["_fields_visible_by_user"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 26
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 42
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        ";
    }

    // line 26
    public function block_show_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "type", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "type", [], "any", false, false, false, 27), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "css_class", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "css_class", [], "any", false, false, false, 27), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"control-label\">
                            ";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "label", [], "any", false, false, false, 29), ($context["_trans_parameters"] ?? null),         // line 4
($context["__internal_474ab466928144aa5094a6e42c77cce71d2d6feeecd7f268fa6962938a7a9e6d"] ?? null));
        // line 29
        echo "
                        </label>
                        <div class=\"form-widget\">
                            <div class=\"form-control\">
                                ";
        // line 33
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderEntityField($this->env, "show", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 33), ($context["entity"] ?? null), ($context["metadata"] ?? null));
        echo "
                            </div>

                            ";
        // line 36
        if ((((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "help", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "help", [], "any", false, false, false, 36), "")) : ("")) != "")) {
            // line 37
            echo "                                <small class=\"form-help\"><i class=\"fa fa-fw fa-info-circle\"></i> ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "help", [], "any", false, false, false, 37), [],             // line 4
($context["__internal_474ab466928144aa5094a6e42c77cce71d2d6feeecd7f268fa6962938a7a9e6d"] ?? null));
            // line 37
            echo "</small>
                            ";
        }
        // line 39
        echo "                        </div>
                    </div>
                ";
    }

    // line 48
    public function block_item_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                ";
        $context["_show_actions"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("show", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 49));
        // line 50
        echo "                ";
        $context["_request_parameters"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 50), "query", [], "any", false, false, false, 50), "all", [], "any", false, false, false, 50);
        // line 51
        echo "
                ";
        // line 52
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", ["actions" =>         // line 53
($context["_show_actions"] ?? null), "entity_config" =>         // line 54
($context["_entity_config"] ?? null), "request_parameters" =>         // line 55
($context["_request_parameters"] ?? null), "translation_domain" => twig_get_attribute($this->env, $this->source,         // line 56
($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 56), "trans_parameters" =>         // line 57
($context["_trans_parameters"] ?? null), "item_id" =>         // line 58
($context["_entity_id"] ?? null), "item" =>         // line 59
($context["entity"] ?? null)], false);
        // line 60
        echo "
            ";
    }

    // line 65
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "show", "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["app"] ?? null), "request", [], "any", false, false, false, 68), "query", [], "any", false, false, false, 68), "get", [0 => "referer", 1 => ""], "method", false, false, false, 68), "delete_form" =>         // line 69
($context["delete_form"] ?? null), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 70
($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 70), "_trans_parameters" =>         // line 71
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 72
($context["_entity_config"] ?? null)], false);
        // line 73
        echo "
    ";
    }

    // line 77
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 78,  269 => 77,  264 => 73,  262 => 72,  261 => 71,  260 => 70,  259 => 69,  258 => 68,  256 => 66,  252 => 65,  247 => 60,  245 => 59,  244 => 58,  243 => 57,  242 => 56,  241 => 55,  240 => 54,  239 => 53,  238 => 52,  235 => 51,  232 => 50,  229 => 49,  225 => 48,  219 => 39,  215 => 37,  213 => 4,  211 => 37,  209 => 36,  203 => 33,  197 => 29,  195 => 4,  194 => 29,  186 => 27,  182 => 26,  178 => 43,  164 => 42,  161 => 26,  143 => 25,  140 => 24,  136 => 23,  132 => 65,  127 => 62,  125 => 48,  119 => 44,  117 => 23,  114 => 22,  110 => 21,  103 => 19,  99 => 13,  94 => 15,  93 => 4,  91 => 15,  88 => 14,  85 => 13,  81 => 12,  74 => 10,  67 => 9,  63 => 7,  61 => 5,  60 => 4,  59 => 5,  58 => 4,  57 => 5,  55 => 4,  53 => 3,  51 => 1,  44 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/show.html.twig", "/var/www/html/Zartisan_prod/zartisanV2/Symfo/zartisan/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}
