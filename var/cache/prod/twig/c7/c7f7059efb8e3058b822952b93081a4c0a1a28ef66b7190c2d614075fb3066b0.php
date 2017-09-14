<?php

/* form_div_layout.html.twig */
class __TwigTemplate_6a3ad433e293b7cb91686c84697b585e0a391d4869c0ab4e76825a836ea45492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dc3eb7051fb18e5c8b187855b8188c36d5bb8da86787a3b935dce6b64dacd58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc3eb7051fb18e5c8b187855b8188c36d5bb8da86787a3b935dce6b64dacd58->enter($__internal_5dc3eb7051fb18e5c8b187855b8188c36d5bb8da86787a3b935dce6b64dacd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 151
        $this->displayBlock('number_widget', $context, $blocks);
        // line 157
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 162
        $this->displayBlock('money_widget', $context, $blocks);
        // line 166
        $this->displayBlock('url_widget', $context, $blocks);
        // line 171
        $this->displayBlock('search_widget', $context, $blocks);
        // line 176
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 181
        $this->displayBlock('password_widget', $context, $blocks);
        // line 186
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 191
        $this->displayBlock('email_widget', $context, $blocks);
        // line 196
        $this->displayBlock('range_widget', $context, $blocks);
        // line 201
        $this->displayBlock('button_widget', $context, $blocks);
        // line 215
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 220
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 227
        $this->displayBlock('form_label', $context, $blocks);
        // line 249
        $this->displayBlock('button_label', $context, $blocks);
        // line 253
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 261
        $this->displayBlock('form_row', $context, $blocks);
        // line 269
        $this->displayBlock('button_row', $context, $blocks);
        // line 275
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 281
        $this->displayBlock('form', $context, $blocks);
        // line 287
        $this->displayBlock('form_start', $context, $blocks);
        // line 301
        $this->displayBlock('form_end', $context, $blocks);
        // line 308
        $this->displayBlock('form_errors', $context, $blocks);
        // line 318
        $this->displayBlock('form_rest', $context, $blocks);
        // line 339
        echo "
";
        // line 342
        $this->displayBlock('form_rows', $context, $blocks);
        // line 348
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 364
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 378
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_5dc3eb7051fb18e5c8b187855b8188c36d5bb8da86787a3b935dce6b64dacd58->leave($__internal_5dc3eb7051fb18e5c8b187855b8188c36d5bb8da86787a3b935dce6b64dacd58_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_11191f07dee97fde08cc5e8a724aac50d09cab26cd92d08d6732cd757e0d01ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11191f07dee97fde08cc5e8a724aac50d09cab26cd92d08d6732cd757e0d01ad->enter($__internal_11191f07dee97fde08cc5e8a724aac50d09cab26cd92d08d6732cd757e0d01ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_11191f07dee97fde08cc5e8a724aac50d09cab26cd92d08d6732cd757e0d01ad->leave($__internal_11191f07dee97fde08cc5e8a724aac50d09cab26cd92d08d6732cd757e0d01ad_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_84a861081a703e254d292bc5f6bcabfdecdf7ed41503a8e8986a256152e0fe34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a861081a703e254d292bc5f6bcabfdecdf7ed41503a8e8986a256152e0fe34->enter($__internal_84a861081a703e254d292bc5f6bcabfdecdf7ed41503a8e8986a256152e0fe34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_84a861081a703e254d292bc5f6bcabfdecdf7ed41503a8e8986a256152e0fe34->leave($__internal_84a861081a703e254d292bc5f6bcabfdecdf7ed41503a8e8986a256152e0fe34_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_fbf59bbcc73a68c2d4cc94959fde7d154477bdcde329bb0a8b727ea2ced6b911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf59bbcc73a68c2d4cc94959fde7d154477bdcde329bb0a8b727ea2ced6b911->enter($__internal_fbf59bbcc73a68c2d4cc94959fde7d154477bdcde329bb0a8b727ea2ced6b911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_fbf59bbcc73a68c2d4cc94959fde7d154477bdcde329bb0a8b727ea2ced6b911->leave($__internal_fbf59bbcc73a68c2d4cc94959fde7d154477bdcde329bb0a8b727ea2ced6b911_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_095e5a1cbf39797f60bd651122f182136fe5d9659a2cb34e17e84721a6ca9a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095e5a1cbf39797f60bd651122f182136fe5d9659a2cb34e17e84721a6ca9a32->enter($__internal_095e5a1cbf39797f60bd651122f182136fe5d9659a2cb34e17e84721a6ca9a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_095e5a1cbf39797f60bd651122f182136fe5d9659a2cb34e17e84721a6ca9a32->leave($__internal_095e5a1cbf39797f60bd651122f182136fe5d9659a2cb34e17e84721a6ca9a32_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d38fdff1d6e63aee3b8cc541a2bed3c2c58972eab799e196dc3139754b58e686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38fdff1d6e63aee3b8cc541a2bed3c2c58972eab799e196dc3139754b58e686->enter($__internal_d38fdff1d6e63aee3b8cc541a2bed3c2c58972eab799e196dc3139754b58e686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_d38fdff1d6e63aee3b8cc541a2bed3c2c58972eab799e196dc3139754b58e686->leave($__internal_d38fdff1d6e63aee3b8cc541a2bed3c2c58972eab799e196dc3139754b58e686_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_ae920c0b5791516eecab37ae541a62acabc08e53a75522bd5f2bb52f97a6fca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae920c0b5791516eecab37ae541a62acabc08e53a75522bd5f2bb52f97a6fca7->enter($__internal_ae920c0b5791516eecab37ae541a62acabc08e53a75522bd5f2bb52f97a6fca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_ae920c0b5791516eecab37ae541a62acabc08e53a75522bd5f2bb52f97a6fca7->leave($__internal_ae920c0b5791516eecab37ae541a62acabc08e53a75522bd5f2bb52f97a6fca7_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_030aa343c5aad52a4a9b4b463fb80b598236af41bfab2e54a4d971a6377d0531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030aa343c5aad52a4a9b4b463fb80b598236af41bfab2e54a4d971a6377d0531->enter($__internal_030aa343c5aad52a4a9b4b463fb80b598236af41bfab2e54a4d971a6377d0531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_030aa343c5aad52a4a9b4b463fb80b598236af41bfab2e54a4d971a6377d0531->leave($__internal_030aa343c5aad52a4a9b4b463fb80b598236af41bfab2e54a4d971a6377d0531_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f890b3019d6aebd8da11ff5883a83ec5e3c0105b1fa62a8256191ffd3d45094d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f890b3019d6aebd8da11ff5883a83ec5e3c0105b1fa62a8256191ffd3d45094d->enter($__internal_f890b3019d6aebd8da11ff5883a83ec5e3c0105b1fa62a8256191ffd3d45094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_f890b3019d6aebd8da11ff5883a83ec5e3c0105b1fa62a8256191ffd3d45094d->leave($__internal_f890b3019d6aebd8da11ff5883a83ec5e3c0105b1fa62a8256191ffd3d45094d_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_c28007710da183f212d627f258b0c77267864ccf268087134883dd14bcc945dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28007710da183f212d627f258b0c77267864ccf268087134883dd14bcc945dd->enter($__internal_c28007710da183f212d627f258b0c77267864ccf268087134883dd14bcc945dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c28007710da183f212d627f258b0c77267864ccf268087134883dd14bcc945dd->leave($__internal_c28007710da183f212d627f258b0c77267864ccf268087134883dd14bcc945dd_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_eecb5289c4d7735d64d968d31e088aec26ab594a4e75143c05917cf7ccbba735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecb5289c4d7735d64d968d31e088aec26ab594a4e75143c05917cf7ccbba735->enter($__internal_eecb5289c4d7735d64d968d31e088aec26ab594a4e75143c05917cf7ccbba735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_eecb5289c4d7735d64d968d31e088aec26ab594a4e75143c05917cf7ccbba735->leave($__internal_eecb5289c4d7735d64d968d31e088aec26ab594a4e75143c05917cf7ccbba735_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ee3846eaca42ee99bb8500dfe46449b6920bce70eb2d7bc1741728583b0653eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3846eaca42ee99bb8500dfe46449b6920bce70eb2d7bc1741728583b0653eb->enter($__internal_ee3846eaca42ee99bb8500dfe46449b6920bce70eb2d7bc1741728583b0653eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_ee3846eaca42ee99bb8500dfe46449b6920bce70eb2d7bc1741728583b0653eb->leave($__internal_ee3846eaca42ee99bb8500dfe46449b6920bce70eb2d7bc1741728583b0653eb_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_281bc174a06ffdf62456eafadc6f18ace4a69a20353b92318d6099b1224ac4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281bc174a06ffdf62456eafadc6f18ace4a69a20353b92318d6099b1224ac4c2->enter($__internal_281bc174a06ffdf62456eafadc6f18ace4a69a20353b92318d6099b1224ac4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_281bc174a06ffdf62456eafadc6f18ace4a69a20353b92318d6099b1224ac4c2->leave($__internal_281bc174a06ffdf62456eafadc6f18ace4a69a20353b92318d6099b1224ac4c2_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_bf8376ff1a3d76dea638e8facb1eaa2faa40d727bf0defea74990379d9c45bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8376ff1a3d76dea638e8facb1eaa2faa40d727bf0defea74990379d9c45bf7->enter($__internal_bf8376ff1a3d76dea638e8facb1eaa2faa40d727bf0defea74990379d9c45bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_bf8376ff1a3d76dea638e8facb1eaa2faa40d727bf0defea74990379d9c45bf7->leave($__internal_bf8376ff1a3d76dea638e8facb1eaa2faa40d727bf0defea74990379d9c45bf7_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b583c6499d8a3c25c54cd42fe5c6edcdd27afdbed99152c1ec98b085d7a59ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b583c6499d8a3c25c54cd42fe5c6edcdd27afdbed99152c1ec98b085d7a59ec4->enter($__internal_b583c6499d8a3c25c54cd42fe5c6edcdd27afdbed99152c1ec98b085d7a59ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_b583c6499d8a3c25c54cd42fe5c6edcdd27afdbed99152c1ec98b085d7a59ec4->leave($__internal_b583c6499d8a3c25c54cd42fe5c6edcdd27afdbed99152c1ec98b085d7a59ec4_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_d98327482002e05a4cef94e03c382b11504a938c986bebfe68a5a5f8f535896f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98327482002e05a4cef94e03c382b11504a938c986bebfe68a5a5f8f535896f->enter($__internal_d98327482002e05a4cef94e03c382b11504a938c986bebfe68a5a5f8f535896f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 139
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 140
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 141
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 142
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 143
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 144
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 145
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 146
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 147
            echo "</div>";
        }
        
        $__internal_d98327482002e05a4cef94e03c382b11504a938c986bebfe68a5a5f8f535896f->leave($__internal_d98327482002e05a4cef94e03c382b11504a938c986bebfe68a5a5f8f535896f_prof);

    }

    // line 151
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_12869a9906d39cd4fc4d72ab4c370918841016022eaddc60032f701b5abcb65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12869a9906d39cd4fc4d72ab4c370918841016022eaddc60032f701b5abcb65a->enter($__internal_12869a9906d39cd4fc4d72ab4c370918841016022eaddc60032f701b5abcb65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 153
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 154
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_12869a9906d39cd4fc4d72ab4c370918841016022eaddc60032f701b5abcb65a->leave($__internal_12869a9906d39cd4fc4d72ab4c370918841016022eaddc60032f701b5abcb65a_prof);

    }

    // line 157
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_44773f2809cac507d3d0155b946d20c73b9b1430b0cacc75faa5e245aac1ee43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44773f2809cac507d3d0155b946d20c73b9b1430b0cacc75faa5e245aac1ee43->enter($__internal_44773f2809cac507d3d0155b946d20c73b9b1430b0cacc75faa5e245aac1ee43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 158
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 159
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_44773f2809cac507d3d0155b946d20c73b9b1430b0cacc75faa5e245aac1ee43->leave($__internal_44773f2809cac507d3d0155b946d20c73b9b1430b0cacc75faa5e245aac1ee43_prof);

    }

    // line 162
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_aa4c8ce561510ffa2b23756cdf5c85934c63857ffc61e630774010c70e0274da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4c8ce561510ffa2b23756cdf5c85934c63857ffc61e630774010c70e0274da->enter($__internal_aa4c8ce561510ffa2b23756cdf5c85934c63857ffc61e630774010c70e0274da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 163
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_aa4c8ce561510ffa2b23756cdf5c85934c63857ffc61e630774010c70e0274da->leave($__internal_aa4c8ce561510ffa2b23756cdf5c85934c63857ffc61e630774010c70e0274da_prof);

    }

    // line 166
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_fc0783a1bb81f8b5d4243666271df66e07fe799c9b433d691e3c7d44fe613597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0783a1bb81f8b5d4243666271df66e07fe799c9b433d691e3c7d44fe613597->enter($__internal_fc0783a1bb81f8b5d4243666271df66e07fe799c9b433d691e3c7d44fe613597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 167
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 168
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fc0783a1bb81f8b5d4243666271df66e07fe799c9b433d691e3c7d44fe613597->leave($__internal_fc0783a1bb81f8b5d4243666271df66e07fe799c9b433d691e3c7d44fe613597_prof);

    }

    // line 171
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_b3d093b01bdef88907da3b33a27a9247b5227b6054c16a1fb50ff5d71f5d0cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d093b01bdef88907da3b33a27a9247b5227b6054c16a1fb50ff5d71f5d0cb8->enter($__internal_b3d093b01bdef88907da3b33a27a9247b5227b6054c16a1fb50ff5d71f5d0cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 172
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 173
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b3d093b01bdef88907da3b33a27a9247b5227b6054c16a1fb50ff5d71f5d0cb8->leave($__internal_b3d093b01bdef88907da3b33a27a9247b5227b6054c16a1fb50ff5d71f5d0cb8_prof);

    }

    // line 176
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_c355bfae86ef9cdf909dd180b1cb4d6d56a82cae8763d81360aba182756ebc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c355bfae86ef9cdf909dd180b1cb4d6d56a82cae8763d81360aba182756ebc02->enter($__internal_c355bfae86ef9cdf909dd180b1cb4d6d56a82cae8763d81360aba182756ebc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 177
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 178
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_c355bfae86ef9cdf909dd180b1cb4d6d56a82cae8763d81360aba182756ebc02->leave($__internal_c355bfae86ef9cdf909dd180b1cb4d6d56a82cae8763d81360aba182756ebc02_prof);

    }

    // line 181
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_c91081075499c5d5b21ef95238d7d306c80cd8d65cdb8981487ecfadb6144fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91081075499c5d5b21ef95238d7d306c80cd8d65cdb8981487ecfadb6144fd2->enter($__internal_c91081075499c5d5b21ef95238d7d306c80cd8d65cdb8981487ecfadb6144fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 182
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 183
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c91081075499c5d5b21ef95238d7d306c80cd8d65cdb8981487ecfadb6144fd2->leave($__internal_c91081075499c5d5b21ef95238d7d306c80cd8d65cdb8981487ecfadb6144fd2_prof);

    }

    // line 186
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_21ae6a474b353a042051ebb6d04d622d8fa7c0eff7ba9f88ba1067bc170b9bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ae6a474b353a042051ebb6d04d622d8fa7c0eff7ba9f88ba1067bc170b9bbf->enter($__internal_21ae6a474b353a042051ebb6d04d622d8fa7c0eff7ba9f88ba1067bc170b9bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 187
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 188
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_21ae6a474b353a042051ebb6d04d622d8fa7c0eff7ba9f88ba1067bc170b9bbf->leave($__internal_21ae6a474b353a042051ebb6d04d622d8fa7c0eff7ba9f88ba1067bc170b9bbf_prof);

    }

    // line 191
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_11486fcef27387848734d824996a02cf02cfe3a313fe0c38d90b87248edb1e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11486fcef27387848734d824996a02cf02cfe3a313fe0c38d90b87248edb1e28->enter($__internal_11486fcef27387848734d824996a02cf02cfe3a313fe0c38d90b87248edb1e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 192
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 193
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_11486fcef27387848734d824996a02cf02cfe3a313fe0c38d90b87248edb1e28->leave($__internal_11486fcef27387848734d824996a02cf02cfe3a313fe0c38d90b87248edb1e28_prof);

    }

    // line 196
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_23c77805884ea9198cad0b0e850185d5c5562e92d6db642c908ef671911d272b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c77805884ea9198cad0b0e850185d5c5562e92d6db642c908ef671911d272b->enter($__internal_23c77805884ea9198cad0b0e850185d5c5562e92d6db642c908ef671911d272b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 197
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 198
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_23c77805884ea9198cad0b0e850185d5c5562e92d6db642c908ef671911d272b->leave($__internal_23c77805884ea9198cad0b0e850185d5c5562e92d6db642c908ef671911d272b_prof);

    }

    // line 201
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_5a8cb2624fc6e40b55229915a8dcc37f2f2288dc37eb3f282eb4c03cce7d3122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8cb2624fc6e40b55229915a8dcc37f2f2288dc37eb3f282eb4c03cce7d3122->enter($__internal_5a8cb2624fc6e40b55229915a8dcc37f2f2288dc37eb3f282eb4c03cce7d3122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 202
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 203
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 204
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 205
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 206
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 209
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 212
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_5a8cb2624fc6e40b55229915a8dcc37f2f2288dc37eb3f282eb4c03cce7d3122->leave($__internal_5a8cb2624fc6e40b55229915a8dcc37f2f2288dc37eb3f282eb4c03cce7d3122_prof);

    }

    // line 215
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_7a87663f6496b21a146fde9ca38c8073a834a0a2d4e976130ed94c48db68bed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a87663f6496b21a146fde9ca38c8073a834a0a2d4e976130ed94c48db68bed6->enter($__internal_7a87663f6496b21a146fde9ca38c8073a834a0a2d4e976130ed94c48db68bed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 216
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 217
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_7a87663f6496b21a146fde9ca38c8073a834a0a2d4e976130ed94c48db68bed6->leave($__internal_7a87663f6496b21a146fde9ca38c8073a834a0a2d4e976130ed94c48db68bed6_prof);

    }

    // line 220
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_88349da5d2f8abb4ef7386c638d3d5daa551bc91e55aa123e3b3b413f801a733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88349da5d2f8abb4ef7386c638d3d5daa551bc91e55aa123e3b3b413f801a733->enter($__internal_88349da5d2f8abb4ef7386c638d3d5daa551bc91e55aa123e3b3b413f801a733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 221
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 222
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_88349da5d2f8abb4ef7386c638d3d5daa551bc91e55aa123e3b3b413f801a733->leave($__internal_88349da5d2f8abb4ef7386c638d3d5daa551bc91e55aa123e3b3b413f801a733_prof);

    }

    // line 227
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1c7c1fe9a51c9c41f33d688a4f35085e2b3cbdfce112f413047258f1d8d6293d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7c1fe9a51c9c41f33d688a4f35085e2b3cbdfce112f413047258f1d8d6293d->enter($__internal_1c7c1fe9a51c9c41f33d688a4f35085e2b3cbdfce112f413047258f1d8d6293d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 228
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 229
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 230
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 232
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 233
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 235
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 236
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 237
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 238
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 239
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 242
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 245
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_1c7c1fe9a51c9c41f33d688a4f35085e2b3cbdfce112f413047258f1d8d6293d->leave($__internal_1c7c1fe9a51c9c41f33d688a4f35085e2b3cbdfce112f413047258f1d8d6293d_prof);

    }

    // line 249
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_eba93670a25181a25ab7ad219b496870b8b1509f6353c6fdc4b08074430cd122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba93670a25181a25ab7ad219b496870b8b1509f6353c6fdc4b08074430cd122->enter($__internal_eba93670a25181a25ab7ad219b496870b8b1509f6353c6fdc4b08074430cd122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_eba93670a25181a25ab7ad219b496870b8b1509f6353c6fdc4b08074430cd122->leave($__internal_eba93670a25181a25ab7ad219b496870b8b1509f6353c6fdc4b08074430cd122_prof);

    }

    // line 253
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_69f5910356dba5ead793bb9af4ee89bf8f55fad168efecb9d8b91619aa44104e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f5910356dba5ead793bb9af4ee89bf8f55fad168efecb9d8b91619aa44104e->enter($__internal_69f5910356dba5ead793bb9af4ee89bf8f55fad168efecb9d8b91619aa44104e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 258
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_69f5910356dba5ead793bb9af4ee89bf8f55fad168efecb9d8b91619aa44104e->leave($__internal_69f5910356dba5ead793bb9af4ee89bf8f55fad168efecb9d8b91619aa44104e_prof);

    }

    // line 261
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_17ba81e5c974d2ed41b2d3d78f0332f655c32854943b3b7d21e47b2e54862f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ba81e5c974d2ed41b2d3d78f0332f655c32854943b3b7d21e47b2e54862f5d->enter($__internal_17ba81e5c974d2ed41b2d3d78f0332f655c32854943b3b7d21e47b2e54862f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 262
        echo "<div>";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 265
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 266
        echo "</div>";
        
        $__internal_17ba81e5c974d2ed41b2d3d78f0332f655c32854943b3b7d21e47b2e54862f5d->leave($__internal_17ba81e5c974d2ed41b2d3d78f0332f655c32854943b3b7d21e47b2e54862f5d_prof);

    }

    // line 269
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_4004eaefae8da45c4f96c4c7ed77b47e4c59222f9ed87003cfa9fa20caae4882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4004eaefae8da45c4f96c4c7ed77b47e4c59222f9ed87003cfa9fa20caae4882->enter($__internal_4004eaefae8da45c4f96c4c7ed77b47e4c59222f9ed87003cfa9fa20caae4882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 270
        echo "<div>";
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 272
        echo "</div>";
        
        $__internal_4004eaefae8da45c4f96c4c7ed77b47e4c59222f9ed87003cfa9fa20caae4882->leave($__internal_4004eaefae8da45c4f96c4c7ed77b47e4c59222f9ed87003cfa9fa20caae4882_prof);

    }

    // line 275
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_01d8eb1a8aa21ca76ea6236a2e79382e7daa4c6127768cb98e64171042615faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d8eb1a8aa21ca76ea6236a2e79382e7daa4c6127768cb98e64171042615faf->enter($__internal_01d8eb1a8aa21ca76ea6236a2e79382e7daa4c6127768cb98e64171042615faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_01d8eb1a8aa21ca76ea6236a2e79382e7daa4c6127768cb98e64171042615faf->leave($__internal_01d8eb1a8aa21ca76ea6236a2e79382e7daa4c6127768cb98e64171042615faf_prof);

    }

    // line 281
    public function block_form($context, array $blocks = array())
    {
        $__internal_0e02cbe5d8be1f6c0589c71ce76a58834538e4e518cc4ccbfa39da97058323ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e02cbe5d8be1f6c0589c71ce76a58834538e4e518cc4ccbfa39da97058323ed->enter($__internal_0e02cbe5d8be1f6c0589c71ce76a58834538e4e518cc4ccbfa39da97058323ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 282
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 283
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 284
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_0e02cbe5d8be1f6c0589c71ce76a58834538e4e518cc4ccbfa39da97058323ed->leave($__internal_0e02cbe5d8be1f6c0589c71ce76a58834538e4e518cc4ccbfa39da97058323ed_prof);

    }

    // line 287
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_58b6fb1aabe3775495efb665caf76addeac0dfbaa0a56816dc6249280c2cb49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b6fb1aabe3775495efb665caf76addeac0dfbaa0a56816dc6249280c2cb49f->enter($__internal_58b6fb1aabe3775495efb665caf76addeac0dfbaa0a56816dc6249280c2cb49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 288
        $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "setMethodRendered", array(), "method");
        // line 289
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 290
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 291
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 293
            $context["form_method"] = "POST";
        }
        // line 295
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 296
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 297
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_58b6fb1aabe3775495efb665caf76addeac0dfbaa0a56816dc6249280c2cb49f->leave($__internal_58b6fb1aabe3775495efb665caf76addeac0dfbaa0a56816dc6249280c2cb49f_prof);

    }

    // line 301
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_4f2ba4cdd102ef6cf70c8a693f28b72672fae694211f2ce352e86e37e606e697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2ba4cdd102ef6cf70c8a693f28b72672fae694211f2ce352e86e37e606e697->enter($__internal_4f2ba4cdd102ef6cf70c8a693f28b72672fae694211f2ce352e86e37e606e697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 302
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 303
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 305
        echo "</form>";
        
        $__internal_4f2ba4cdd102ef6cf70c8a693f28b72672fae694211f2ce352e86e37e606e697->leave($__internal_4f2ba4cdd102ef6cf70c8a693f28b72672fae694211f2ce352e86e37e606e697_prof);

    }

    // line 308
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b8109cf8f94d5e9d479ae8fba81fc3c2557b71cc49467692fde842e9a60b6814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8109cf8f94d5e9d479ae8fba81fc3c2557b71cc49467692fde842e9a60b6814->enter($__internal_b8109cf8f94d5e9d479ae8fba81fc3c2557b71cc49467692fde842e9a60b6814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 309
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 310
            echo "<ul>";
            // line 311
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 312
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 314
            echo "</ul>";
        }
        
        $__internal_b8109cf8f94d5e9d479ae8fba81fc3c2557b71cc49467692fde842e9a60b6814->leave($__internal_b8109cf8f94d5e9d479ae8fba81fc3c2557b71cc49467692fde842e9a60b6814_prof);

    }

    // line 318
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_3e6ea216babc6da9b3441bec1d25ebac2def4d53da9d9a939f00c7a6a270e74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6ea216babc6da9b3441bec1d25ebac2def4d53da9d9a939f00c7a6a270e74e->enter($__internal_3e6ea216babc6da9b3441bec1d25ebac2def4d53da9d9a939f00c7a6a270e74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 320
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 321
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 324
        echo "
    ";
        // line 325
        if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "methodRendered", array())) {
            // line 326
            $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "setMethodRendered", array(), "method");
            // line 327
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
            // line 328
            if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
                // line 329
                $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
            } else {
                // line 331
                $context["form_method"] = "POST";
            }
            // line 334
            if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
                // line 335
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_3e6ea216babc6da9b3441bec1d25ebac2def4d53da9d9a939f00c7a6a270e74e->leave($__internal_3e6ea216babc6da9b3441bec1d25ebac2def4d53da9d9a939f00c7a6a270e74e_prof);

    }

    // line 342
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_69578d7019819690984e3f22a986ef961706f758d6e9550d693f0a2aa39cafa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69578d7019819690984e3f22a986ef961706f758d6e9550d693f0a2aa39cafa7->enter($__internal_69578d7019819690984e3f22a986ef961706f758d6e9550d693f0a2aa39cafa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 344
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_69578d7019819690984e3f22a986ef961706f758d6e9550d693f0a2aa39cafa7->leave($__internal_69578d7019819690984e3f22a986ef961706f758d6e9550d693f0a2aa39cafa7_prof);

    }

    // line 348
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_d71850df3019ed2ad507b210c4cabc8e11bc8a15dbe0a7fd7d55b5e6f5df83ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71850df3019ed2ad507b210c4cabc8e11bc8a15dbe0a7fd7d55b5e6f5df83ec->enter($__internal_d71850df3019ed2ad507b210c4cabc8e11bc8a15dbe0a7fd7d55b5e6f5df83ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 349
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 350
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 351
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 353
            echo " ";
            // line 354
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 356
$context["attrvalue"] === true)) {
                // line 357
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 358
$context["attrvalue"] === false)) {
                // line 359
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d71850df3019ed2ad507b210c4cabc8e11bc8a15dbe0a7fd7d55b5e6f5df83ec->leave($__internal_d71850df3019ed2ad507b210c4cabc8e11bc8a15dbe0a7fd7d55b5e6f5df83ec_prof);

    }

    // line 364
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_50ed3a2e59e072144d0701e563847293be26ef726fe117c2ebcf738fd61ad01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ed3a2e59e072144d0701e563847293be26ef726fe117c2ebcf738fd61ad01f->enter($__internal_50ed3a2e59e072144d0701e563847293be26ef726fe117c2ebcf738fd61ad01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 365
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 367
            echo " ";
            // line 368
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 369
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 370
$context["attrvalue"] === true)) {
                // line 371
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 372
$context["attrvalue"] === false)) {
                // line 373
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_50ed3a2e59e072144d0701e563847293be26ef726fe117c2ebcf738fd61ad01f->leave($__internal_50ed3a2e59e072144d0701e563847293be26ef726fe117c2ebcf738fd61ad01f_prof);

    }

    // line 378
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_c30c42301b6378823573da5f6a62adca26fe079f20ab1581e0bbf1f55659181b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30c42301b6378823573da5f6a62adca26fe079f20ab1581e0bbf1f55659181b->enter($__internal_c30c42301b6378823573da5f6a62adca26fe079f20ab1581e0bbf1f55659181b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 379
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 381
            echo " ";
            // line 382
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 383
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 384
$context["attrvalue"] === true)) {
                // line 385
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 386
$context["attrvalue"] === false)) {
                // line 387
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c30c42301b6378823573da5f6a62adca26fe079f20ab1581e0bbf1f55659181b->leave($__internal_c30c42301b6378823573da5f6a62adca26fe079f20ab1581e0bbf1f55659181b_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_5d51b70293111ebaec66f0cd5ed73fc47cb3fef017d76cc7b9e1757216304931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d51b70293111ebaec66f0cd5ed73fc47cb3fef017d76cc7b9e1757216304931->enter($__internal_5d51b70293111ebaec66f0cd5ed73fc47cb3fef017d76cc7b9e1757216304931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5d51b70293111ebaec66f0cd5ed73fc47cb3fef017d76cc7b9e1757216304931->leave($__internal_5d51b70293111ebaec66f0cd5ed73fc47cb3fef017d76cc7b9e1757216304931_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1355 => 400,  1353 => 399,  1348 => 398,  1346 => 397,  1341 => 396,  1339 => 395,  1337 => 394,  1333 => 393,  1327 => 392,  1312 => 387,  1310 => 386,  1305 => 385,  1303 => 384,  1298 => 383,  1296 => 382,  1294 => 381,  1290 => 380,  1281 => 379,  1275 => 378,  1260 => 373,  1258 => 372,  1253 => 371,  1251 => 370,  1246 => 369,  1244 => 368,  1242 => 367,  1238 => 366,  1232 => 365,  1226 => 364,  1211 => 359,  1209 => 358,  1204 => 357,  1202 => 356,  1197 => 355,  1195 => 354,  1193 => 353,  1189 => 352,  1185 => 351,  1181 => 350,  1175 => 349,  1169 => 348,  1158 => 344,  1154 => 343,  1148 => 342,  1137 => 335,  1135 => 334,  1132 => 331,  1129 => 329,  1127 => 328,  1125 => 327,  1123 => 326,  1121 => 325,  1118 => 324,  1111 => 321,  1109 => 320,  1105 => 319,  1099 => 318,  1091 => 314,  1083 => 312,  1079 => 311,  1077 => 310,  1075 => 309,  1069 => 308,  1062 => 305,  1059 => 303,  1057 => 302,  1051 => 301,  1041 => 297,  1039 => 296,  1012 => 295,  1009 => 293,  1006 => 291,  1004 => 290,  1002 => 289,  1000 => 288,  994 => 287,  987 => 284,  985 => 283,  983 => 282,  977 => 281,  970 => 276,  964 => 275,  957 => 272,  955 => 271,  953 => 270,  947 => 269,  940 => 266,  938 => 265,  936 => 264,  934 => 263,  932 => 262,  926 => 261,  919 => 258,  913 => 253,  902 => 249,  879 => 245,  875 => 242,  872 => 239,  871 => 238,  870 => 237,  868 => 236,  866 => 235,  863 => 233,  861 => 232,  858 => 230,  856 => 229,  854 => 228,  848 => 227,  841 => 222,  839 => 221,  833 => 220,  826 => 217,  824 => 216,  818 => 215,  805 => 212,  801 => 209,  798 => 206,  797 => 205,  796 => 204,  794 => 203,  792 => 202,  786 => 201,  779 => 198,  777 => 197,  771 => 196,  764 => 193,  762 => 192,  756 => 191,  749 => 188,  747 => 187,  741 => 186,  734 => 183,  732 => 182,  726 => 181,  718 => 178,  716 => 177,  710 => 176,  703 => 173,  701 => 172,  695 => 171,  688 => 168,  686 => 167,  680 => 166,  673 => 163,  667 => 162,  660 => 159,  658 => 158,  652 => 157,  645 => 154,  643 => 153,  637 => 151,  629 => 147,  625 => 146,  621 => 145,  617 => 144,  613 => 143,  609 => 142,  605 => 141,  601 => 140,  597 => 139,  595 => 138,  591 => 137,  588 => 135,  586 => 134,  580 => 133,  572 => 129,  562 => 128,  557 => 127,  555 => 126,  552 => 124,  550 => 123,  544 => 122,  536 => 118,  534 => 116,  533 => 115,  532 => 114,  531 => 113,  527 => 112,  524 => 110,  522 => 109,  516 => 108,  508 => 104,  506 => 103,  504 => 102,  502 => 101,  500 => 100,  496 => 99,  493 => 97,  491 => 96,  485 => 95,  468 => 92,  462 => 91,  445 => 88,  439 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 392,  153 => 378,  151 => 364,  149 => 348,  147 => 342,  144 => 339,  142 => 318,  140 => 308,  138 => 301,  136 => 287,  134 => 281,  132 => 275,  130 => 269,  128 => 261,  126 => 253,  124 => 249,  122 => 227,  120 => 220,  118 => 215,  116 => 201,  114 => 196,  112 => 191,  110 => 186,  108 => 181,  106 => 176,  104 => 171,  102 => 166,  100 => 162,  98 => 157,  96 => 151,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}

    {% if not form.methodRendered %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
