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

/* @EasyAdmin/default/menu.html.twig */
class __TwigTemplate_693dfef3139ef0489656b2971a7652de4ff55f553b8be5216413cededc12d58e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "
";
        // line 32
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $context["_translation_domain"] = _twig_default_filter(((twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 36), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("translation_domain"))) : ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("translation_domain"))), "messages");
        // line 37
        echo "<ul class=\"sidebar-menu\" data-widget=\"tree\" data-animation-speed=\"250\">
    ";
        // line 38
        $context["_menu_items"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.menu");
        // line 39
        echo "
    ";
        // line 40
        $this->displayBlock('main_menu', $context, $blocks);
        // line 67
        echo "</ul>

";
        // line 69
        $this->displayBlock('main_menu_after', $context, $blocks);
    }

    // line 34
    public function block_main_menu_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 40
    public function block_main_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["_menu_items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 65
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    ";
    }

    // line 42
    public function block_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                ";
        $context["is_selected_menu"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 43), "query", [], "any", false, true, false, 43), "get", [0 => "menuIndex"], "method", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 43), "query", [], "any", false, true, false, 43), "get", [0 => "menuIndex"], "method", false, false, false, 43),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "menu_index", [], "any", false, false, false, 43));
        // line 44
        echo "                ";
        $context["is_selected_submenu"] = (($context["is_selected_menu"] ?? null) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 44), "query", [], "any", false, true, false, 44), "get", [0 => "submenuIndex"], "method", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 44), "query", [], "any", false, true, false, 44), "get", [0 => "submenuIndex"], "method", false, false, false, 44),  -1)) : ( -1)) !=  -1));
        // line 45
        echo "                ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isGranted(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "permission", [], "any", false, false, false, 45))) {
            // line 46
            echo "                    <li class=\"";
            echo (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 46) == "divider")) ? ("header") : (""));
            echo " ";
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 46))) ? ("treeview") : (""));
            echo " ";
            echo ((($context["is_selected_menu"] ?? null)) ? ("active") : (""));
            echo " ";
            echo ((($context["is_selected_submenu"] ?? null)) ? ("submenu-active") : (""));
            echo "\">
                    ";
            // line 47
            echo twig_call_macro($macros["helper"], "macro_render_menu_item", [($context["item"] ?? null), ($context["_translation_domain"] ?? null)], 47, $context, $this->getSourceContext());
            echo "

                    ";
            // line 49
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 49), [])) : ([])))) {
                // line 50
                echo "                        <ul class=\"treeview-menu\">
                            ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 51));
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
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 52
                    echo "                                ";
                    $this->displayBlock('menu_subitem', $context, $blocks);
                    // line 59
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                        </ul>
                    ";
            }
            // line 62
            echo "                </li>
                ";
        }
        // line 64
        echo "            ";
    }

    // line 52
    public function block_menu_subitem($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                                    ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isGranted(twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "permission", [], "any", false, false, false, 53))) {
            // line 54
            echo "                                        <li class=\"";
            echo (((twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "type", [], "any", false, false, false, 54) == "divider")) ? ("header") : (""));
            echo " ";
            echo (((($context["is_selected_menu"] ?? null) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 54), "query", [], "any", false, true, false, 54), "get", [0 => "submenuIndex"], "method", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 54), "query", [], "any", false, true, false, 54), "get", [0 => "submenuIndex"], "method", false, false, false, 54),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "submenu_index", [], "any", false, false, false, 54)))) ? ("active") : (""));
            echo "\">
                                            ";
            // line 55
            echo twig_call_macro($macros["helper"], "macro_render_menu_item", [($context["subitem"] ?? null), ($context["_translation_domain"] ?? null)], 55, $context, $this->getSourceContext());
            echo "
                                        </li>
                                    ";
        }
        // line 58
        echo "                                ";
    }

    // line 69
    public function block_main_menu_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1
    public function macro_render_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 2) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 3), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = ["menuIndex" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "menu_index", [], "any", false, false, false, 5), "submenuIndex" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "submenu_index", [], "any", false, false, false, 5)];
                // line 6
                echo "        ";
                $context["path"] = (((twig_get_attribute($this->env, $this->source,                 // line 7
($context["item"] ?? null), "type", [], "any", false, false, false, 7) == "link")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 7)) : ((((twig_get_attribute($this->env, $this->source,                 // line 8
($context["item"] ?? null), "type", [], "any", false, false, false, 8) == "route")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "route", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "params", [], "any", false, false, false, 8))) : ((((twig_get_attribute($this->env, $this->source,                 // line 9
($context["item"] ?? null), "type", [], "any", false, false, false, 9) == "entity")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(twig_array_merge(["entity" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "entity", [], "any", false, false, false, 9), "action" => "list"], ($context["menu_params"] ?? null)), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "params", [], "any", false, false, false, 9)))) : ((((twig_get_attribute($this->env, $this->source,                 // line 10
($context["item"] ?? null), "type", [], "any", false, false, false, 10) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 17) == "route") && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["path"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "route", [], "any", false, false, false, 18), twig_array_merge(($context["menu_params"] ?? null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "params", [], "any", false, false, false, 18)));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "\"
           class=\"";
                // line 22
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "css_class", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "css_class", [], "any", false, false, false, 22), "")) : ("")), "html", null, true);
                echo "\"
           ";
                // line 23
                if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", [], "any", false, false, false, 23), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", [], "any", false, false, false, 23), "html", null, true);
                    echo "\"";
                }
                // line 24
                echo "           ";
                if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rel", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rel", [], "any", false, false, false, 24), false)) : (false))) {
                    echo "rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rel", [], "any", false, false, false, 24), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 25
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 25))) {
                    echo "<i class=\"fa fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 25), "html", null, true);
                    echo "\"></i>";
                }
                // line 26
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 26), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                echo "</span>
            ";
                // line 27
                if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 27), [])) : ([])))) {
                    echo "<i class=\"fa fa-fw fa-angle-right treeview-icon\"></i>";
                }
                // line 28
                echo "        </a>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 28,  316 => 27,  311 => 26,  305 => 25,  296 => 24,  290 => 23,  286 => 22,  282 => 21,  279 => 20,  276 => 19,  273 => 18,  270 => 17,  267 => 12,  265 => 10,  264 => 9,  263 => 8,  262 => 7,  260 => 6,  257 => 5,  251 => 3,  248 => 2,  234 => 1,  228 => 69,  224 => 58,  218 => 55,  211 => 54,  208 => 53,  204 => 52,  200 => 64,  196 => 62,  192 => 60,  178 => 59,  175 => 52,  158 => 51,  155 => 50,  153 => 49,  148 => 47,  137 => 46,  134 => 45,  131 => 44,  128 => 43,  124 => 42,  120 => 66,  106 => 65,  103 => 42,  85 => 41,  81 => 40,  75 => 34,  71 => 69,  67 => 67,  65 => 40,  62 => 39,  60 => 38,  57 => 37,  55 => 36,  52 => 35,  50 => 34,  47 => 33,  45 => 32,  42 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/menu.html.twig", "/var/www/html/Zartisan_prod/zartisanV2/Symfo/zartisan/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/menu.html.twig");
    }
}
