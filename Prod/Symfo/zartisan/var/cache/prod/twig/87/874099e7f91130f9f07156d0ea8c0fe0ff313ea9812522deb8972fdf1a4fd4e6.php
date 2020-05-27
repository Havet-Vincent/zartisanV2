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

/* @EasyAdmin/form/bootstrap_4.html.twig */
class __TwigTemplate_f54a140a77575e5dc252cc36fc139648318bebbb7d7879e6d0f17e5c8f738b96 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@EasyAdmin/form/bootstrap_4.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'collection_row' => [$this, 'block_collection_row'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'easyadmin_rest' => [$this, 'block_easyadmin_rest'],
                'item_actions' => [$this, 'block_item_actions'],
                'easyadmin_widget' => [$this, 'block_easyadmin_widget'],
                'easyadmin_widget_groups' => [$this, 'block_easyadmin_widget_groups'],
                'easyadmin_autocomplete_widget' => [$this, 'block_easyadmin_autocomplete_widget'],
                'easyadmin_autocomplete_inner_label' => [$this, 'block_easyadmin_autocomplete_inner_label'],
                'easyadmin_code_editor_widget' => [$this, 'block_easyadmin_code_editor_widget'],
                'easyadmin_text_editor_widget' => [$this, 'block_easyadmin_text_editor_widget'],
                'easyadmin_section_row' => [$this, 'block_easyadmin_section_row'],
                'easyadmin_batch_widget' => [$this, 'block_easyadmin_batch_widget'],
                'easyadmin_filters_widget' => [$this, 'block_easyadmin_filters_widget'],
                'easyadmin_numeric_filter_widget' => [$this, 'block_easyadmin_numeric_filter_widget'],
                'easyadmin_datetime_filter_widget' => [$this, 'block_easyadmin_datetime_filter_widget'],
                'easyadmin_fileupload_widget' => [$this, 'block_easyadmin_fileupload_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 21
        echo "
";
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('form_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('date_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('time_widget', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('file_widget', $context, $blocks);
        // line 129
        echo "
";
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('form_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('collection_row', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        $this->displayBlock('button_row', $context, $blocks);
        // line 216
        echo "
";
        // line 218
        echo "
";
        // line 219
        $this->displayBlock('form_label', $context, $blocks);
        // line 243
        echo "
";
        // line 246
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 262
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 312
        echo "
";
        // line 313
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 359
        echo "
";
        // line 360
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 369
        echo "
";
        // line 370
        $this->displayBlock('item_actions', $context, $blocks);
        // line 399
        echo "
";
        // line 401
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 483
        echo "
";
        // line 485
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 496
        echo "
";
        // line 497
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 501
        echo "
";
        // line 503
        $this->displayBlock('easyadmin_code_editor_widget', $context, $blocks);
        // line 519
        echo "
";
        // line 521
        $this->displayBlock('easyadmin_text_editor_widget', $context, $blocks);
        // line 527
        echo "
";
        // line 529
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        // line 542
        echo "
";
        // line 544
        $this->displayBlock('easyadmin_batch_widget', $context, $blocks);
        // line 559
        echo "
";
        // line 561
        $this->displayBlock('easyadmin_filters_widget', $context, $blocks);
        // line 611
        echo "
";
        // line 612
        $this->displayBlock('easyadmin_numeric_filter_widget', $context, $blocks);
        // line 628
        echo "
";
        // line 629
        $this->displayBlock('easyadmin_datetime_filter_widget', $context, $blocks);
        // line 632
        echo "
";
        // line 633
        $this->displayBlock('easyadmin_fileupload_widget', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_join_filter([0 => ((twig_get_attribute($this->env, $this->source,             // line 6
($context["attr"] ?? null), "class", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 6), "")) : ("")), 1 => (twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", [], "any", false, false, false, 6) . "-form")], " "), "data-view" => twig_get_attribute($this->env, $this->source,             // line 7
($context["easyadmin"] ?? null), "view", [], "any", false, false, false, 7), "data-entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "data-entity-id" => (((twig_get_attribute($this->env, $this->source,             // line 9
($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 9), "primary_key_field_name", [], "any", false, false, false, 9), [], "any", true, true, false, 9) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 9), "primary_key_field_name", [], "any", false, false, false, 9), [], "any", false, false, false, 9)))) ? (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 9), "primary_key_field_name", [], "any", false, false, false, 9), [], "any", false, false, false, 9)) : (""))]);
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13)) > 0)) {
            // line 14
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 19
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "query", [], "any", false, false, false, 19), "get", [0 => "referer", 1 => ""], "method", false, false, false, 19), "html", null, true);
        echo "\"/>";
    }

    // line 24
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 25), "vars", [], "any", false, true, false, 25), "allow_delete", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 25), "vars", [], "any", false, true, false, 25), "allow_delete", [], "any", false, false, false, 25), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start(function () { return ''; });
            // line 27
            echo "        \$(function() {
            event.preventDefault();

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            var hasCountAttr = parentDiv.data('count');

            if (hasCountAttr === undefined) {
                var numItems = parentDiv.children('div.form-group').length;
                parentDiv.data('count', ++numItems)
            }

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
        });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 47
            echo "
        <div class=\"field-collection-item-row\">
            ";
            // line 49
            $this->displayParentBlock("form_widget", $context, $blocks);
            echo "

            <a class=\"field-collection-item-action\" id=\"easyadmin-remove-collection-item-";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\" href=\"#\" onclick=\"";
            echo ($context["remove_item_javascript"] ?? null);
            echo "; return false;\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "\">
                &times;
            </a>
        </div>
    ";
        } else {
            // line 56
            echo "        ";
            $this->displayParentBlock("form_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 60
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 62
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 62), "")) : ("")))]);
        }
        // line 64
        if (((isset($context["type"]) || array_key_exists("type", $context)) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 65
            echo "        ";
            // line 66
            $context["required"] = false;
        }
        // line 68
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 71
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 73
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 74
        echo "</div>";
    }

    // line 77
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 79
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 80
        echo "</div>";
    }

    // line 83
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 84), "")) : ("")))]);
        // line 85
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 87
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 87), "vars", [], "any", false, true, false, 87), "allow_delete", [], "any", true, true, false, 87)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 87), "vars", [], "any", false, true, false, 87), "allow_delete", [], "any", false, false, false, 87), false)) : (false))) {
            // line 88
            echo "        ";
            ob_start(function () { return ''; });
            // line 89
            echo "            \$(function() {
                event.preventDefault();

                var containerDiv = \$('#";
            // line 92
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
                var parentDiv = containerDiv.parents('[data-prototype]:first');
                containerDiv.remove();
                parentDiv.trigger('easyadmin.collection.item-deleted');

                if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                    \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
                }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 102
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a id=\"easyadmin-remove-collection-item-";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104), "html", null, true);
            echo "\" href=\"#\" onclick=\"";
            echo ($context["remove_item_javascript"] ?? null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-fw fa-remove\"></i>
                ";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 112
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        if ((((isset($context["vich"]) || array_key_exists("vich", $context))) ? (_twig_default_filter(($context["vich"] ?? null), false)) : (false))) {
            // line 114
            $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
            // line 115
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 117
            $this->displayParentBlock("file_widget", $context, $blocks);
            // line 119
            echo "<script>
            document.querySelector('#";
            // line 120
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').addEventListener('change', function() {
                const fileName = this.value.replace('C:\\\\fakepath\\\\', '');
                const customInputFileLabel = document.querySelector('#";
            // line 122
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " ~ .custom-file-label');
                customInputFileLabel.classList.add('selected');
                customInputFileLabel.innerHTML = fileName;
            });
        </script>
    ";
        }
    }

    // line 132
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 133), "fieldType", [], "any", true, true, false, 133)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 133), "fieldType", [], "any", false, false, false, 133), "default")) : ("default"));
        // line 134
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 136
        echo "<div class=\"form-widget\">
            ";
        // line 137
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 137), "prepend_html", [], "any", true, true, false, 137)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 137), "prepend_html", [], "any", false, false, false, 137), null)) : (null)));
        // line 138
        echo "            ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 138), "append_html", [], "any", true, true, false, 138)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 138), "append_html", [], "any", false, false, false, 138), null)) : (null)));
        // line 139
        echo "            ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 140
        echo "
            ";
        // line 141
        if (($context["has_input_groups"] ?? null)) {
            echo "<div class=\"input-group\">";
        }
        // line 142
        echo "                ";
        if (($context["has_prepend_html"] ?? null)) {
            // line 143
            echo "                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">";
            // line 144
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, false, false, 144), "prepend_html", [], "any", false, false, false, 144);
            echo "</span>
                    </div>
                ";
        }
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 150
        if (($context["has_append_html"] ?? null)) {
            // line 151
            echo "                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\">";
            // line 152
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, false, false, 152), "append_html", [], "any", false, false, false, 152);
            echo "</span>
                    </div>
                ";
        }
        // line 155
        echo "            ";
        if (($context["has_input_groups"] ?? null)) {
            echo "</div>";
        }
        // line 156
        echo "
            ";
        // line 157
        if ((twig_in_filter(($context["_field_type"] ?? null), [0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "dateinterval", 5 => "time", 6 => "time_immutable", 7 => "birthday"]) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 157), "nullable", [], "any", true, true, false, 157)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 157), "nullable", [], "any", false, false, false, 157), false)) : (false)))) {
            // line 158
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 160
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 165
        echo "
            ";
        // line 166
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 166), "help", [], "any", true, true, false, 166)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 166), "help", [], "any", false, false, false, 166), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 166), "help", [], "any", false, false, false, 166))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 166), "help", [], "any", false, false, false, 166))) != "")) {
            // line 167
            echo "                <small class=\"form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 167), "help", [], "any", true, true, false, 167)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 167), "help", [], "any", false, false, false, 167), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 167), "help", [], "any", false, false, false, 167))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 167), "help", [], "any", false, false, false, 167))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 167), "translation_domain", [], "any", false, false, false, 167));
            echo "</small>
            ";
        }
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 171
        echo "</div>
    </div>";
    }

    // line 175
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 178
        if ((((isset($context["allow_add"]) || array_key_exists("allow_add", $context))) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 179
            echo "        ";
            ob_start(function () { return ''; });
            // line 180
            echo "            \$(function() {
                event.preventDefault();

                var collection = \$('#";
            // line 183
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 190), "name", [], "any", false, false, false, 190), "html", null, true);
            echo "label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 191
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 191), "name", [], "any", false, false, false, 191), "html", null, true);
            echo "/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 192
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\\]\\[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 192), "name", [], "any", false, false, false, 192), "html", null, true);
            echo "\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 201
            echo "
        <div class=\"form-group field-collection-action\">
            <a id=\"easyadmin-add-collection-item-";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 203), "id", [], "any", false, false, false, 203), "html", null, true);
            echo "\" href=\"#\" onclick=\"";
            echo ($context["js_add_item"] ?? null);
            echo "; return false;\">
                <i class=\"fa fa-plus pr-1\"></i>
                ";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 211
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 212), "css_class", [], "any", true, true, false, 212)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 212), "css_class", [], "any", false, false, false, 212), "")) : ("")), "html", null, true);
        echo "\">";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 214
        echo "</div>";
    }

    // line 219
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        if ( !(($context["label"] ?? null) === false)) {
            // line 221
            if (((isset($context["compound"]) || array_key_exists("compound", $context)) && ($context["compound"] ?? null))) {
                // line 222
                $context["element"] = "legend";
                // line 223
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 223)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 223), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 225
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 225)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 225), "")) : ("")) . " form-control-label"))]);
            }
            // line 227
            if (($context["required"] ?? null)) {
                // line 228
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 228)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 228), "")) : ("")) . " required"))]);
            }
            // line 230
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 231
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 232
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 233
($context["name"] ?? null), "%id%" =>                     // line 234
($context["id"] ?? null)]);
                } else {
                    // line 237
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 240
            echo "<";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 240, $this->getSourceContext());
                }
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_to_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4);
                $context['_parent'] = $context;
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 246
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 247
        echo "<div class=\"form-widget-compound\">
        ";
        // line 250
        echo "        ";
        $context["isEmptyCollection"] = (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null)));
        // line 251
        echo "        ";
        if (($context["isEmptyCollection"] ?? null)) {
            // line 252
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        }
        // line 254
        echo "        ";
        if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 254), "prototype", [], "any", true, true, false, 254))) {
            // line 255
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)]);
            // line 256
            echo "        ";
        }
        // line 257
        echo "
        ";
        // line 258
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>";
    }

    // line 262
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 263
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 264
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 264), "templates", [], "any", false, false, false, 264), "label_empty", [], "any", false, false, false, 264));
        echo "
    </div>
";
    }

    // line 268
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 269
        echo "    ";
        $context["force_error"] = true;
        // line 270
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 273
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 274
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 275
        if ( !twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 276
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle")));
            // line 277
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 278
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 285
            echo "            <a class=\"easyadmin-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 286
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true, false, 286) &&  !(null === (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["extension_icons"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["file_extension"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["extension_icons"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["file_extension"] ?? null)] ?? null) : null), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>
                ";
            // line 287
            echo twig_escape_filter($this->env, ($context["download_title"] ?? null), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 290
        echo "
        ";
        // line 291
        ob_start(function () { return ''; });
        // line 292
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 292), "vars", [], "any", false, false, false, 292), "id", [], "any", false, false, false, 292), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 295), "vars", [], "any", false, false, false, 295), "id", [], "any", false, false, false, 295), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 297
        echo "
        <div class=\"easyadmin-vich-file-actions\">
            ";
        // line 300
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 302), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 305
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 305)) {
            // line 306
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 306), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 308
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 309
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 309), "vars", [], "any", false, false, false, 309), "id", [], "any", false, false, false, 309), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 313
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 314
        echo "    ";
        $context["force_error"] = true;
        // line 315
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 318
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 319
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 320
        if ( !twig_test_empty((((isset($context["image_uri"]) || array_key_exists("image_uri", $context))) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 321
            echo "            ";
            if (twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 322
                echo "                <div class=\"easyadmin-thumbnail\">
                    <img style=\"cursor: initial\" src=\"";
                // line 323
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true);
                echo "\">
                </div>
            ";
            } else {
                // line 326
                echo "                ";
                $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? null));
                // line 327
                echo "
                <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
                // line 328
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
                    <img src=\"";
                // line 329
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
                echo "\">
                </a>

                <div id=\"";
                // line 332
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" class=\"easyadmin-lightbox\">
                    <img src=\"";
                // line 333
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
                echo "\">
                </div>
            ";
            }
            // line 336
            echo "        ";
        }
        // line 337
        echo "
        ";
        // line 338
        ob_start(function () { return ''; });
        // line 339
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 339), "vars", [], "any", false, false, false, 339), "id", [], "any", false, false, false, 339), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 342), "vars", [], "any", false, false, false, 342), "id", [], "any", false, false, false, 342), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 344
        echo "
        <div class=\"easyadmin-vich-image-actions\">
            ";
        // line 347
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 349), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 352
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 352)) {
            // line 353
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 353), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 355
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 356
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 356), "vars", [], "any", false, false, false, 356), "id", [], "any", false, false, false, 356), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 360
    public function block_easyadmin_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 361
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 363
        echo "<section class=\"content-footer\">
        <div class=\"form-actions\">";
        // line 365
        $this->displayBlock("item_actions", $context, $blocks);
        // line 366
        echo "</div>
    </section>
";
    }

    // line 370
    public function block_item_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 371
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 371), "translation_domain", [], "any", false, false, false, 371);
        // line 372
        echo "    ";
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 372), "name", [], "any", false, false, false, 372), array(), ($context["_translation_domain"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 372), "label", [], "any", false, false, false, 372), array(), ($context["_translation_domain"] ?? null))];
        // line 373
        echo "
    ";
        // line 375
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <span class=\"btn-label\">";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "</span>
    </button>

    ";
        // line 379
        $context["_entity_actions"] = (((twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", [], "any", false, false, false, 379) == "new")) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("new", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 380
($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 380), "name", [], "any", false, false, false, 380))) : ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("edit", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 381
($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 381), "name", [], "any", false, false, false, 381))));
        // line 382
        echo "
    ";
        // line 383
        $context["_entity_id"] = (((twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", [], "any", false, false, false, 383) == "new")) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 385
($context["easyadmin"] ?? null), "item", [], "any", false, false, false, 385), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 385), "primary_key_field_name", [], "any", false, false, false, 385), [], "any", false, false, false, 385)));
        // line 386
        echo "
    ";
        // line 387
        $context["_request_parameters"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 387), "name", [], "any", false, false, false, 387), "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 387), "query", [], "any", false, false, false, 387), "get", [0 => "referer"], "method", false, false, false, 387)];
        // line 388
        echo "
    ";
        // line 389
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", ["actions" =>         // line 390
($context["_entity_actions"] ?? null), "entity_config" => twig_get_attribute($this->env, $this->source,         // line 391
($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 391), "request_parameters" =>         // line 392
($context["_request_parameters"] ?? null), "translation_domain" =>         // line 393
($context["_translation_domain"] ?? null), "trans_parameters" =>         // line 394
($context["_trans_parameters"] ?? null), "item_id" =>         // line 395
($context["_entity_id"] ?? null), "item" => twig_get_attribute($this->env, $this->source,         // line 396
($context["easyadmin"] ?? null), "item", [], "any", false, false, false, 396)], false);
        // line 397
        echo "
";
    }

    // line 401
    public function block_easyadmin_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 402
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 402), "translation_domain", [], "any", false, false, false, 402);
        // line 403
        echo "    <div class=\"row\">
        ";
        // line 404
        if ((twig_length_filter($this->env, ($context["easyadmin_form_tabs"] ?? null)) > 0)) {
            // line 405
            echo "            <div class=\"col-12\">
                <div class=\"nav-tabs-custom form-tabs\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 408
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? null));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 409
                echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
                // line 410
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 410)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["tab_config"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["id"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["tab_config"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["id"] ?? null) : null), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">";
                // line 411
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 411)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 411), false)) : (false))) {
                    // line 412
                    echo "<i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 412), "html", null, true);
                    echo "\"></i>";
                }
                // line 414
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["tab_config"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["label"] ?? null) : null), array(), ($context["_translation_domain"] ?? null)), "html", null, true);
                // line 415
                if ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 415) > 0)) {
                    // line 416
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("form.tab.error_badge_title", twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 416), [], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 417
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 417), "html", null, true);
                    // line 418
                    echo "</span>";
                }
                // line 420
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 423
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 425
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? null));
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
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 426
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["tab_config"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 426)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 426)) ? (_twig_default_filter((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["tab_config"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["css_class"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\">
                                ";
                // line 427
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 427)) ? (_twig_default_filter((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["tab_config"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["help"] ?? null) : null), false)) : (false))) {
                    // line 428
                    echo "                                    <div class=\"content-header-help tab-help\">
                                        ";
                    // line 429
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["tab_config"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["help"] ?? null) : null), array(), ($context["_translation_domain"] ?? null));
                    echo "
                                    </div>
                                ";
                }
                // line 432
                echo "
                                <div class=\"row\">
                                    ";
                // line 434
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 438
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 442
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 444
        echo "    </div>
";
    }

    // line 447
    public function block_easyadmin_widget_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 448
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["easyadmin_form_groups"] ?? null), function ($__group_config__) use ($context, $macros) { $context["group_config"] = $__group_config__; return ( !twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", [], "any", false, false, false, 448) || (twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", [], "any", false, false, false, 448) == ($context["tab_name"] ?? null))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 449
            echo "        <div class=\"field-group col-";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "columns", [], "any", true, true, false, 449)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "columns", [], "any", false, false, false, 449), "12")) : ("12")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", [], "any", true, true, false, 449)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", [], "any", false, false, false, 449), "")) : ("")), "html", null, true);
            echo "\">
            <fieldset>
                ";
            // line 451
            if (((((twig_get_attribute($this->env, $this->source, $context["group_config"], "label", [], "any", true, true, false, 451)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", [], "any", false, false, false, 451), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", true, true, false, 451)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", false, false, false, 451), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", [], "any", true, true, false, 451)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", [], "any", false, false, false, 451), false)) : (false)))) {
                // line 452
                echo "                    <legend class=\"";
                echo ((((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", true, true, false, 452)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", false, false, false, 452), false)) : (false))) ? ("with-icon") : (""));
                echo "\">
                        ";
                // line 453
                if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", true, true, false, 453)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", false, false, false, 453), false)) : (false))) {
                    // line 454
                    echo "                            <i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", false, false, false, 454), "html", null, true);
                    echo "\"></i>
                        ";
                }
                // line 456
                echo "                        ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", [], "any", false, false, false, 456), array(), ($context["_translation_domain"] ?? null));
                echo "
                    </legend>

                    ";
                // line 459
                if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "help", [], "any", true, true, false, 459)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", [], "any", false, false, false, 459), false)) : (false))) {
                    // line 460
                    echo "                        <div class=\"legend-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", [], "any", false, false, false, 460), array(), ($context["_translation_domain"] ?? null));
                    echo "</div>
                    ";
                }
                // line 462
                echo "                ";
            }
            // line 463
            echo "
                <div class=\"row\">
                    ";
            // line 465
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 465), "block_prefixes", [], "any", false, false, false, 465)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 465), "easyadmin", [], "any", false, false, false, 465), "form_group", [], "any", false, false, false, 465) == $context["group_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 466
                echo "                        ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 466), "easyadmin", [], "any", false, false, false, 466), "form_tab", [], "any", false, false, false, 466) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 466), "easyadmin", [], "any", false, false, false, 466), "form_tab", [], "any", false, false, false, 466) == ($context["tab_name"] ?? null)))) {
                    // line 467
                    echo "                            <div class=\"col-";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 467), "easyadmin", [], "any", false, true, false, 467), "field", [], "any", false, true, false, 467), "columns", [], "any", true, true, false, 467)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 467), "easyadmin", [], "any", false, true, false, 467), "field", [], "any", false, true, false, 467), "columns", [], "any", false, false, false, 467), "12")) : ("12")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 467), "easyadmin", [], "any", false, true, false, 467), "field", [], "any", false, true, false, 467), "css_class", [], "any", true, true, false, 467)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 467), "easyadmin", [], "any", false, true, false, 467), "field", [], "any", false, true, false, 467), "css_class", [], "any", false, false, false, 467), "")) : ("")), "html", null, true);
                    echo "\">
                                ";
                    // line 468
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                            </div>
                        ";
                }
                // line 471
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 472
            echo "                </div>
            </fieldset>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 476
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 476), "block_prefixes", [], "any", false, false, false, 476)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 476), "easyadmin", [], "any", false, false, false, 476), "form_tab", [], "any", false, false, false, 476) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 476), "easyadmin", [], "any", false, false, false, 476), "form_tab", [], "any", false, false, false, 476) == ($context["tab_name"] ?? null)))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 477
                echo "            <div class=\"col-";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "easyadmin", [], "any", false, true, false, 477), "field", [], "any", false, true, false, 477), "columns", [], "any", true, true, false, 477)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "easyadmin", [], "any", false, true, false, 477), "field", [], "any", false, true, false, 477), "columns", [], "any", false, false, false, 477), "12")) : ("12")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "easyadmin", [], "any", false, true, false, 477), "field", [], "any", false, true, false, 477), "css_class", [], "any", true, true, false, 477)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "easyadmin", [], "any", false, true, false, 477), "field", [], "any", false, true, false, 477), "css_class", [], "any", false, false, false, 477), "")) : ("")), "html", null, true);
                echo "\">
                ";
                // line 478
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 481
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 485
    public function block_easyadmin_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 486
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 486), 'widget', ["attr" => twig_array_merge(        // line 487
($context["attr"] ?? null), ["required" =>         // line 488
($context["required"] ?? null), "data-easyadmin-autocomplete-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ["action" => "autocomplete", "entity" =>         // line 491
($context["autocomplete_entity_name"] ?? null)])])]);
        // line 494
        echo "
";
    }

    // line 497
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 498
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 498), "vars", [], "any", false, false, false, 498), "name", [], "any", false, false, false, 498);
        // line 499
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 503
    public function block_easyadmin_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 504
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["data-easyadmin-code-editor" => "true", "data-language" =>         // line 506
($context["language"] ?? null), "data-tab-size" =>         // line 507
($context["tabSize"] ?? null), "data-indent-with-tabs" => ((        // line 508
($context["indentWithTabs"] ?? null)) ? ("true") : ("false")), "data-js-url" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/form-type-code-editor.js"), "data-css-url" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/form-type-code-editor.css")])]);
        // line 511
        echo "

    ";
        // line 513
        if ( !(null === ($context["height"] ?? null))) {
            // line 514
            echo "        <style type=\"text/css\">
            #";
            // line 515
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " + .CodeMirror { height: ";
            echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
            echo "px !important; max-height: none; }
        </style>
    ";
        }
    }

    // line 521
    public function block_easyadmin_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 522
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["style" => "display: none"])]);
        echo "
    <div class=\"easyadmin-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 524
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"trix-content\" data-js-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/form-type-text-editor.js"), "html", null, true);
        echo "\" data-css-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/form-type-text-editor.css"), "html", null, true);
        echo "\"></trix-editor>
    </div>
";
    }

    // line 529
    public function block_easyadmin_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 530
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 530), "translation_domain", [], "any", false, false, false, 530);
        // line 531
        echo "    <div class=\"form-section ";
        echo ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 531), "icon", [], "any", true, true, false, 531)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 531), "icon", [], "any", false, false, false, 531), false)) : (false)) == false) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 531), "label", [], "any", true, true, false, 531)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 531), "label", [], "any", false, false, false, 531), false)) : (false)) == false))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 531), "css_class", [], "any", true, true, false, 531)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 531), "css_class", [], "any", false, false, false, 531), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 533
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 533), "icon", [], "any", true, true, false, 533)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 533), "icon", [], "any", false, false, false, 533), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, false, false, 533), "icon", [], "any", false, false, false, 533), "html", null, true);
            echo "\"></i>";
        }
        // line 534
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 534), "label", [], "any", true, true, false, 534)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 534), "label", [], "any", false, false, false, 534), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 534), "label", [], "any", true, true, false, 534)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 534), "label", [], "any", false, false, false, 534), "")) : ("")), array(), ($context["_translation_domain"] ?? null));
        }
        echo "</span>
        </h2>

        ";
        // line 537
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 537), "help", [], "any", true, true, false, 537)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 537), "help", [], "any", false, false, false, 537), false)) : (false))) {
            // line 538
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, false, false, 538), "help", [], "any", false, false, false, 538), array(), ($context["_translation_domain"] ?? null));
            echo "</p>
        ";
        }
        // line 540
        echo "    </div>
";
    }

    // line 544
    public function block_easyadmin_batch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 545
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 545), "translation_domain", [], "any", false, false, false, 545);
        // line 546
        echo "    ";
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 546), "name", [], "any", false, false, false, 546), array(), ($context["_translation_domain"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 546), "label", [], "any", false, false, false, 546), array(), ($context["_translation_domain"] ?? null))];
        // line 547
        echo "
    ";
        // line 548
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ids", [], "any", false, false, false, 548), 'widget');
        echo "
    <button type=\"button\" class=\"btn btn-link deselect-batch-button\">";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.deselect", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "</button>
    ";
        // line 550
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batch_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 551
            echo "        <button type=\"submit\" class=\"btn ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", true, true, false, 551)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", false, false, false, 551), "btn-secondary")) : ("btn-secondary")), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["action"], "ask_confirm", [], "any", false, false, false, 551)) {
                echo "batch-action-requires-confirmation";
            }
            echo "\" title=\"";
            ((twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", true, true, false, 551)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 551), "")) : ("")))) ? (print ("")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 551), ($context["_trans_parameters"] ?? null)), "html", null, true))));
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 551), "vars", [], "any", false, false, false, 551), "full_name", [], "any", false, false, false, 551), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 551), "html", null, true);
            echo "\">";
            // line 552
            if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 552)) {
                echo "<i class=\"fa fa-fw fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 552), "html", null, true);
                echo "\"></i> ";
            }
            // line 553
            if ((twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", true, true, false, 553) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 553)))) {
                // line 554
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 554), ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
            }
            // line 556
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 561
    public function block_easyadmin_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 562
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 562), "translation_domain", [], "any", false, false, false, 562);
        // line 563
        echo "    ";
        $context["applied_filters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "filters", [], "any", false, true, false, 563), "applied", [], "any", true, true, false, 563)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "filters", [], "any", false, true, false, 563), "applied", [], "any", false, false, false, 563), [])) : ([]));
        // line 564
        echo "
    ";
        // line 565
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 566
            echo "        <div class=\"filter-field ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 566)) {
                echo "border-bottom";
            }
            echo " py-1 px-3 ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 566)) {
                echo "pb-2";
            }
            echo "\">
            <div class=\"filter-heading\" id=\"filter-heading-";
            // line 567
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 567), "html", null, true);
            echo "\">
                <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 568
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 568), "name", [], "any", false, false, false, 568), ($context["applied_filters"] ?? null))) {
                echo "checked";
            }
            echo ">
                <a data-toggle=\"collapse\" href=\"#filter-content-";
            // line 569
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 569), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 569), "name", [], "any", false, false, false, 569), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 569), "html", null, true);
            echo "\">
                    ";
            // line 570
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 570), "label", [], "any", true, true, false, 570)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 570), "label", [], "any", false, false, false, 570), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 570), "name", [], "any", false, false, false, 570)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 570), "name", [], "any", false, false, false, 570)))), array(), ($context["_translation_domain"] ?? null)), "html", null, true);
            echo "
                </a>
            </div>
            <div id=\"filter-content-";
            // line 573
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 573), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 573), "name", [], "any", false, false, false, 573), ($context["applied_filters"] ?? null))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 573), "html", null, true);
            echo "\">
                <div class=\"form-widget my-2\">
                    ";
            // line 575
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                </div>
            </div>
        </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        echo "
    <script>
        document.querySelectorAll('.filter-checkbox').forEach(filterCheckbox => {
            filterCheckbox.addEventListener('change', function () {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // we can't use -> \"document.querySelector('form#filters').addEventListener('change', ...);\"
        // because it doesn't work with Select2 elements changes
        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        \$(document).on('change', 'form#";
        // line 597
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 597), "id", [], "any", false, false, false, 597), "html", null, true);
        echo "', function (event) {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            let filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>

    ";
        // line 609
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
    }

    // line 612
    public function block_easyadmin_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 613
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 614
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 614), 'row');
        echo "
        ";
        // line 615
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 615), 'row');
        echo "
        <div id=\"wrapper_";
        // line 616
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 616), "vars", [], "any", false, false, false, 616), "id", [], "any", false, false, false, 616), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 616), "vars", [], "any", false, false, false, 616), "value", [], "any", false, false, false, 616) != "between")) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 617
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 617), 'row');
        echo "
        </div>
        <script>
            document.querySelector('#";
        // line 620
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 620), "vars", [], "any", false, false, false, 620), "id", [], "any", false, false, false, 620), "html", null, true);
        echo "').addEventListener('change', function(event) {
                const input = document.querySelector('#wrapper_";
        // line 621
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 621), "vars", [], "any", false, false, false, 621), "id", [], "any", false, false, false, 621), "html", null, true);
        echo "');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>";
        // line 626
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 629
    public function block_easyadmin_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 630
        echo "    ";
        $this->displayBlock("easyadmin_numeric_filter_widget", $context, $blocks);
        echo "
";
    }

    // line 633
    public function block_easyadmin_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 634
        echo "    <div class=\"easyadmin-fileupload\">
        <div class=\"input-group\">
            ";
        // line 636
        $context["placeholder"] = null;
        // line 637
        echo "            ";
        $context["title"] = null;
        // line 638
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 639
        echo "            ";
        if (($context["currentFiles"] ?? null)) {
            // line 640
            echo "                ";
            if (($context["multiple"] ?? null)) {
                // line 641
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 642
                echo "                ";
            } else {
                // line 643
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 643);
                // line 644
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 644));
                // line 645
                echo "                ";
            }
            // line 646
            echo "            ";
        }
        // line 647
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 647), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 647), "vars", [], "any", false, false, false, 647), "attr", [], "any", false, false, false, 647), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null)])]);
        echo "
            <div class=\"input-group-append\">
                <span class=\"input-group-text\" ";
        // line 649
        if (twig_test_empty(($context["currentFiles"] ?? null))) {
            echo "style=\"display: none\"";
        }
        echo ">";
        // line 650
        if (($context["currentFiles"] ?? null)) {
            // line 651
            if (($context["multiple"] ?? null)) {
                // line 652
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce(($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 652)); })), "html", null, true);
                echo "
                        ";
            } else {
                // line 654
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 654)), "html", null, true);
                echo "
                        ";
            }
        }
        // line 657
        echo "</span>
                ";
        // line 658
        if (($context["allow_delete"] ?? null)) {
            // line 659
            echo "                    <label class=\"btn easyadmin-fileupload-delete-btn\" ";
            if (twig_test_empty(($context["currentFiles"] ?? null))) {
                echo "style=\"display: none\"";
            }
            echo " for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 659), "vars", [], "any", false, false, false, 659), "id", [], "any", false, false, false, 659), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 663
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 663), "vars", [], "any", false, false, false, 663), "id", [], "any", false, false, false, 663), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 668
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 669
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 672
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 673
                echo "                        <tr>
                            <td>
                                ";
                // line 675
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 675))), "html", null, true);
                    echo "\">";
                }
                // line 676
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 676)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 677
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 677), "html", null, true);
                echo "
                                    </span>
                                ";
                // line 679
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 680
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 681
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 681)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 684
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 688
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 689
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 689), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 691
        echo "    </div>
    ";
        // line 692
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 692), 'errors');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_4.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1848 => 692,  1845 => 691,  1839 => 689,  1836 => 688,  1830 => 684,  1821 => 681,  1818 => 680,  1814 => 679,  1809 => 677,  1804 => 676,  1798 => 675,  1794 => 673,  1790 => 672,  1785 => 669,  1783 => 668,  1774 => 663,  1762 => 659,  1760 => 658,  1757 => 657,  1750 => 654,  1744 => 652,  1742 => 651,  1740 => 650,  1735 => 649,  1729 => 647,  1726 => 646,  1723 => 645,  1720 => 644,  1717 => 643,  1714 => 642,  1711 => 641,  1708 => 640,  1705 => 639,  1702 => 638,  1699 => 637,  1697 => 636,  1693 => 634,  1689 => 633,  1682 => 630,  1678 => 629,  1674 => 626,  1667 => 621,  1663 => 620,  1657 => 617,  1649 => 616,  1645 => 615,  1641 => 614,  1638 => 613,  1634 => 612,  1628 => 609,  1613 => 597,  1594 => 580,  1575 => 575,  1564 => 573,  1558 => 570,  1550 => 569,  1544 => 568,  1540 => 567,  1529 => 566,  1512 => 565,  1509 => 564,  1506 => 563,  1503 => 562,  1499 => 561,  1490 => 556,  1487 => 554,  1485 => 553,  1479 => 552,  1465 => 551,  1461 => 550,  1457 => 549,  1453 => 548,  1450 => 547,  1447 => 546,  1444 => 545,  1440 => 544,  1435 => 540,  1429 => 538,  1427 => 537,  1418 => 534,  1412 => 533,  1404 => 531,  1401 => 530,  1397 => 529,  1386 => 524,  1380 => 522,  1376 => 521,  1366 => 515,  1363 => 514,  1361 => 513,  1357 => 511,  1355 => 508,  1354 => 507,  1353 => 506,  1351 => 504,  1347 => 503,  1343 => 499,  1340 => 498,  1336 => 497,  1331 => 494,  1329 => 491,  1328 => 488,  1327 => 487,  1325 => 486,  1321 => 485,  1313 => 481,  1304 => 478,  1297 => 477,  1292 => 476,  1284 => 472,  1278 => 471,  1272 => 468,  1265 => 467,  1262 => 466,  1258 => 465,  1254 => 463,  1251 => 462,  1245 => 460,  1243 => 459,  1236 => 456,  1230 => 454,  1228 => 453,  1223 => 452,  1221 => 451,  1213 => 449,  1207 => 448,  1203 => 447,  1198 => 444,  1192 => 442,  1186 => 438,  1168 => 434,  1164 => 432,  1158 => 429,  1155 => 428,  1153 => 427,  1142 => 426,  1125 => 425,  1121 => 423,  1113 => 420,  1110 => 418,  1108 => 417,  1104 => 416,  1102 => 415,  1100 => 414,  1095 => 412,  1093 => 411,  1084 => 410,  1081 => 409,  1077 => 408,  1072 => 405,  1070 => 404,  1067 => 403,  1064 => 402,  1060 => 401,  1055 => 397,  1053 => 396,  1052 => 395,  1051 => 394,  1050 => 393,  1049 => 392,  1048 => 391,  1047 => 390,  1046 => 389,  1043 => 388,  1041 => 387,  1038 => 386,  1036 => 385,  1035 => 383,  1032 => 382,  1030 => 381,  1029 => 380,  1028 => 379,  1022 => 376,  1019 => 375,  1016 => 373,  1013 => 372,  1010 => 371,  1006 => 370,  1000 => 366,  998 => 365,  995 => 363,  993 => 361,  989 => 360,  982 => 356,  979 => 355,  973 => 353,  971 => 352,  965 => 349,  961 => 348,  958 => 347,  954 => 344,  949 => 342,  942 => 339,  940 => 338,  937 => 337,  934 => 336,  928 => 333,  924 => 332,  918 => 329,  914 => 328,  911 => 327,  908 => 326,  902 => 323,  899 => 322,  896 => 321,  894 => 320,  891 => 319,  887 => 318,  880 => 315,  877 => 314,  873 => 313,  866 => 309,  863 => 308,  857 => 306,  855 => 305,  849 => 302,  845 => 301,  842 => 300,  838 => 297,  833 => 295,  826 => 292,  824 => 291,  821 => 290,  815 => 287,  811 => 286,  806 => 285,  803 => 278,  800 => 277,  797 => 276,  795 => 275,  792 => 274,  788 => 273,  781 => 270,  778 => 269,  774 => 268,  767 => 264,  764 => 263,  760 => 262,  754 => 258,  751 => 257,  748 => 256,  745 => 255,  742 => 254,  736 => 252,  733 => 251,  730 => 250,  727 => 247,  723 => 246,  701 => 240,  697 => 237,  694 => 234,  693 => 233,  692 => 232,  690 => 231,  688 => 230,  685 => 228,  683 => 227,  680 => 225,  677 => 223,  675 => 222,  673 => 221,  671 => 220,  667 => 219,  663 => 214,  661 => 213,  655 => 212,  651 => 211,  642 => 205,  635 => 203,  631 => 201,  615 => 192,  607 => 191,  603 => 190,  593 => 183,  588 => 180,  585 => 179,  583 => 178,  577 => 176,  573 => 175,  568 => 171,  566 => 170,  560 => 167,  558 => 166,  555 => 165,  548 => 161,  542 => 160,  538 => 158,  536 => 157,  533 => 156,  528 => 155,  522 => 152,  519 => 151,  517 => 150,  515 => 148,  509 => 144,  506 => 143,  503 => 142,  499 => 141,  496 => 140,  493 => 139,  490 => 138,  488 => 137,  485 => 136,  483 => 135,  475 => 134,  473 => 133,  469 => 132,  458 => 122,  453 => 120,  450 => 119,  448 => 117,  445 => 115,  443 => 114,  441 => 113,  437 => 112,  428 => 106,  421 => 104,  417 => 102,  404 => 92,  399 => 89,  396 => 88,  394 => 87,  392 => 85,  390 => 84,  386 => 83,  382 => 80,  380 => 79,  378 => 78,  374 => 77,  370 => 74,  368 => 73,  366 => 72,  362 => 71,  358 => 68,  355 => 66,  353 => 65,  351 => 64,  348 => 62,  346 => 61,  342 => 60,  334 => 56,  322 => 51,  317 => 49,  313 => 47,  293 => 30,  288 => 27,  285 => 26,  282 => 25,  278 => 24,  272 => 19,  270 => 17,  264 => 14,  262 => 13,  259 => 12,  256 => 11,  254 => 9,  253 => 8,  252 => 7,  251 => 6,  249 => 5,  247 => 4,  243 => 3,  239 => 633,  236 => 632,  234 => 629,  231 => 628,  229 => 612,  226 => 611,  224 => 561,  221 => 559,  219 => 544,  216 => 542,  214 => 529,  211 => 527,  209 => 521,  206 => 519,  204 => 503,  201 => 501,  199 => 497,  196 => 496,  194 => 485,  191 => 483,  189 => 447,  186 => 446,  184 => 401,  181 => 399,  179 => 370,  176 => 369,  174 => 360,  171 => 359,  169 => 318,  166 => 317,  164 => 313,  161 => 312,  159 => 273,  156 => 272,  154 => 268,  151 => 267,  149 => 262,  147 => 246,  144 => 243,  142 => 219,  139 => 218,  136 => 216,  134 => 211,  131 => 210,  129 => 175,  126 => 174,  124 => 132,  121 => 131,  118 => 129,  116 => 112,  113 => 111,  111 => 83,  108 => 82,  106 => 77,  103 => 76,  101 => 71,  98 => 70,  96 => 60,  93 => 59,  91 => 24,  88 => 23,  85 => 21,  83 => 3,  80 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/form/bootstrap_4.html.twig", "/var/www/html/Zartisan_prod/zartisanV2/Symfo/zartisan/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_4.html.twig");
    }
}
