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

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_97c7e60b2fbadc8b64d94fd91f9ef36fe6e58fc0288e273b5ff31f920fdeaa32 extends \Twig\Template
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
            'entity_form' => [$this, 'block_entity_form'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", [], "any", false, false, false, 8), "layout", [], "any", false, false, false, 8), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), false);
        // line 3
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "query", [], "any", false, false, false, 3), "get", [0 => "entity"], "method", false, false, false, 3));
        // line 4
        $context["_entity_id"] = twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "primary_key_field_name", [], "any", false, false, false, 4), [], "any", false, false, false, 4);
        // line 5
        $context["__internal_8eb7c26b784983bf1b6cabbf2f3969edb810b2c47313bd43897e32fe9e48b9db"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 5);
        // line 6
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 6), [],         // line 5
($context["__internal_8eb7c26b784983bf1b6cabbf2f3969edb810b2c47313bd43897e32fe9e48b9db"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 6
($context["_entity_config"] ?? null), "label", [], "any", false, false, false, 6), [],         // line 5
($context["__internal_8eb7c26b784983bf1b6cabbf2f3969edb810b2c47313bd43897e32fe9e48b9db"] ?? null)), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? null)];
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 10)) . "-") . ($context["_entity_id"] ?? null)), "html", null, true);
    }

    // line 11
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 11))), "html", null, true);
    }

    // line 13
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        ob_start(function () { return ''; });
        // line 15
        echo "        ";
        $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
        // line 16
        echo "        ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "edit", [], "any", false, true, false, 16), "title", [], "any", true, true, false, 16)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "edit", [], "any", false, false, false, 16), "title", [], "any", false, false, false, 16), ($context["_trans_parameters"] ?? null),         // line 5
($context["__internal_8eb7c26b784983bf1b6cabbf2f3969edb810b2c47313bd43897e32fe9e48b9db"] ?? null))) : (        // line 16
($context["_default_title"] ?? null))), "html", null, true);
        echo "
    ";
        $___internal_e3877ffcc95d779dc4446cb125f2c0f96335ed5644ad8f287fa23f16bf84c8c6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo twig_spaceless($___internal_e3877ffcc95d779dc4446cb125f2c0f96335ed5644ad8f287fa23f16bf84c8c6_);
    }

    // line 20
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 22
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 23
    public function block_entity_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
    ";
    }

    // line 27
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "edit", "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["app"] ?? null), "request", [], "any", false, false, false, 30), "query", [], "any", false, false, false, 30), "get", [0 => "referer", 1 => ""], "method", false, false, false, 30), "delete_form" =>         // line 31
($context["delete_form"] ?? null), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 32
($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 32), "_trans_parameters" =>         // line 33
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 34
($context["_entity_config"] ?? null)], false);
        // line 35
        echo "
    ";
    }

    // line 39
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 44
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.are_you_sure", [], "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            const entityForm = document.querySelector('form.edit-form');
            const formSubmitButton = entityForm.querySelector('button[type=\"submit\"]');
            const inputFieldsSelector = 'input,select,textarea';

            // Adding visual feedback for invalid fields: any \".form-group\" with invalid fields
            // receives \"has-error\" class. The class is removed on click on the \".form-group\"
            // itself to support custom/complex fields.
            formSubmitButton.addEventListener('click', function() {
                entityForm.querySelectorAll(inputFieldsSelector).forEach(function (input) {
                    if (!input.validity.valid) {
                        const formGroup = input.closest('div.form-group');

                        formGroup.classList.add('has-error');

                        formGroup.addEventListener('click', function onFormGroupClick() {
                            formGroup.classList.remove('has-error');
                            formGroup.removeEventListener('click', onFormGroupClick);
                        });
                    }
                });
            });

            // forms with tabs require some special treatment for errors. The problem
            // is when the field with errors is included in a tab not currently visible.
            // Browser shows this error \"An invalid form control with name='...' is not focusable.\"
            // So, the user clicks on Submit button, the form is not submitted and the error
            // is not displayed. This JavaScript code ensures that each tab shows a badge with
            // the number of errors in it.
            formSubmitButton.addEventListener('click', function() {
                const formTabPanes = entityForm.querySelectorAll('.tab-pane');
                if (0 === formTabPanes.length) {
                    return;
                }

                let firstNavTabItemWithError = null;

                formTabPanes.forEach(function (tabPane) {
                    let tabPaneNumErrors = 0;
                    tabPane.querySelectorAll(inputFieldsSelector).forEach(function (input) {
                        if (!input.validity.valid) {
                            tabPaneNumErrors++;
                        }
                    });

                    let navTabItem = entityForm.querySelector('.nav-item a[href=\"#' + tabPane.id + '\"]');
                    let existingErrorBadge = navTabItem.querySelector('span.badge.badge-danger');
                    if (null !== existingErrorBadge) {
                        navTabItem.removeChild(existingErrorBadge);
                    }

                    if (tabPaneNumErrors > 0) {
                        let newErrorBadge = document.createElement('span');
                        newErrorBadge.classList.add('badge', 'badge-danger');
                        newErrorBadge.title = 'form.tab.error_badge_title';
                        newErrorBadge.textContent = tabPaneNumErrors;

                        navTabItem.appendChild(newErrorBadge);

                        if (null === firstNavTabItemWithError) {
                            firstNavTabItemWithError = navTabItem;
                        }
                    }
                });

                if (firstNavTabItemWithError) {
                    firstNavTabItemWithError.click();
                }
            });

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
        // line 127
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 127,  164 => 44,  156 => 40,  152 => 39,  147 => 35,  145 => 34,  144 => 33,  143 => 32,  142 => 31,  141 => 30,  139 => 28,  135 => 27,  128 => 24,  124 => 23,  120 => 27,  117 => 26,  114 => 23,  110 => 22,  103 => 20,  99 => 14,  94 => 16,  93 => 5,  91 => 16,  88 => 15,  85 => 14,  81 => 13,  74 => 11,  67 => 10,  63 => 8,  61 => 6,  60 => 5,  59 => 6,  58 => 5,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  49 => 1,  42 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/edit.html.twig", "/var/www/html/Zartisan_prod/zartisanV2/Symfo/zartisan/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
