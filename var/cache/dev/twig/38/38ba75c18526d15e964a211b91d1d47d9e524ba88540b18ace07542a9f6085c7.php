<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_624baab531c3509cc1f7617902ab378ac7e7410cd97c405a90cb54c9471bfa1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2500a2ca127595dcfa5fb55585fcbc95e0b8503fa961ec3654493faf327f612c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2500a2ca127595dcfa5fb55585fcbc95e0b8503fa961ec3654493faf327f612c->enter($__internal_2500a2ca127595dcfa5fb55585fcbc95e0b8503fa961ec3654493faf327f612c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_64a4fb5d03bd3d1073d51be1d04a5d4c853024de4db4faec8d087c9db199dcfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a4fb5d03bd3d1073d51be1d04a5d4c853024de4db4faec8d087c9db199dcfd->enter($__internal_64a4fb5d03bd3d1073d51be1d04a5d4c853024de4db4faec8d087c9db199dcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_2500a2ca127595dcfa5fb55585fcbc95e0b8503fa961ec3654493faf327f612c->leave($__internal_2500a2ca127595dcfa5fb55585fcbc95e0b8503fa961ec3654493faf327f612c_prof);

        
        $__internal_64a4fb5d03bd3d1073d51be1d04a5d4c853024de4db4faec8d087c9db199dcfd->leave($__internal_64a4fb5d03bd3d1073d51be1d04a5d4c853024de4db4faec8d087c9db199dcfd_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_892a7a96bcf71650c57828c5940c412312a565a686eb90083a9853cfb60cec1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892a7a96bcf71650c57828c5940c412312a565a686eb90083a9853cfb60cec1b->enter($__internal_892a7a96bcf71650c57828c5940c412312a565a686eb90083a9853cfb60cec1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5aef7543aaa839375106ebf4dae909954fd50b0970c25805b204b34924d93623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aef7543aaa839375106ebf4dae909954fd50b0970c25805b204b34924d93623->enter($__internal_5aef7543aaa839375106ebf4dae909954fd50b0970c25805b204b34924d93623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5aef7543aaa839375106ebf4dae909954fd50b0970c25805b204b34924d93623->leave($__internal_5aef7543aaa839375106ebf4dae909954fd50b0970c25805b204b34924d93623_prof);

        
        $__internal_892a7a96bcf71650c57828c5940c412312a565a686eb90083a9853cfb60cec1b->leave($__internal_892a7a96bcf71650c57828c5940c412312a565a686eb90083a9853cfb60cec1b_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_8b5b7b37c6e98da21a9884b39bef6fe377a5bc60e84f8f1b360e4593afb27f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5b7b37c6e98da21a9884b39bef6fe377a5bc60e84f8f1b360e4593afb27f38->enter($__internal_8b5b7b37c6e98da21a9884b39bef6fe377a5bc60e84f8f1b360e4593afb27f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ea6ddcf993dcd27598cea8dfa7cb7f73501c2afa0559e4f11c43de8f3f0831a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6ddcf993dcd27598cea8dfa7cb7f73501c2afa0559e4f11c43de8f3f0831a7->enter($__internal_ea6ddcf993dcd27598cea8dfa7cb7f73501c2afa0559e4f11c43de8f3f0831a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_ea6ddcf993dcd27598cea8dfa7cb7f73501c2afa0559e4f11c43de8f3f0831a7->leave($__internal_ea6ddcf993dcd27598cea8dfa7cb7f73501c2afa0559e4f11c43de8f3f0831a7_prof);

        
        $__internal_8b5b7b37c6e98da21a9884b39bef6fe377a5bc60e84f8f1b360e4593afb27f38->leave($__internal_8b5b7b37c6e98da21a9884b39bef6fe377a5bc60e84f8f1b360e4593afb27f38_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ee8956f68726c019fc8a5f92d7581f2e615e39148166fe25cde99218674a5644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8956f68726c019fc8a5f92d7581f2e615e39148166fe25cde99218674a5644->enter($__internal_ee8956f68726c019fc8a5f92d7581f2e615e39148166fe25cde99218674a5644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_dcfe8984d89b2125d6ca5486aa453ddc067a360c98d61048b483a1beeadd1542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfe8984d89b2125d6ca5486aa453ddc067a360c98d61048b483a1beeadd1542->enter($__internal_dcfe8984d89b2125d6ca5486aa453ddc067a360c98d61048b483a1beeadd1542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_dcfe8984d89b2125d6ca5486aa453ddc067a360c98d61048b483a1beeadd1542->leave($__internal_dcfe8984d89b2125d6ca5486aa453ddc067a360c98d61048b483a1beeadd1542_prof);

        
        $__internal_ee8956f68726c019fc8a5f92d7581f2e615e39148166fe25cde99218674a5644->leave($__internal_ee8956f68726c019fc8a5f92d7581f2e615e39148166fe25cde99218674a5644_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_6b7466a46a713e08bea4b8faade833cf5011d7b5e1d5fc9b065ce6dafa42fd8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7466a46a713e08bea4b8faade833cf5011d7b5e1d5fc9b065ce6dafa42fd8e->enter($__internal_6b7466a46a713e08bea4b8faade833cf5011d7b5e1d5fc9b065ce6dafa42fd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_31c8b5239edfc8fd836ec70386843adbb60c4d3c117a91a554f0d5d194b6abea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c8b5239edfc8fd836ec70386843adbb60c4d3c117a91a554f0d5d194b6abea->enter($__internal_31c8b5239edfc8fd836ec70386843adbb60c4d3c117a91a554f0d5d194b6abea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_5ce5706fcbcc21fc617e0516b93762461674f54f74786c8391ad11e3d5941951 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_235504fc10b3830d5957a4383eaf9956b7047da207398269ca72964bbe5ceb96 = "{{") && ('' === $__internal_235504fc10b3830d5957a4383eaf9956b7047da207398269ca72964bbe5ceb96 || 0 === strpos($__internal_5ce5706fcbcc21fc617e0516b93762461674f54f74786c8391ad11e3d5941951, $__internal_235504fc10b3830d5957a4383eaf9956b7047da207398269ca72964bbe5ceb96)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_31c8b5239edfc8fd836ec70386843adbb60c4d3c117a91a554f0d5d194b6abea->leave($__internal_31c8b5239edfc8fd836ec70386843adbb60c4d3c117a91a554f0d5d194b6abea_prof);

        
        $__internal_6b7466a46a713e08bea4b8faade833cf5011d7b5e1d5fc9b065ce6dafa42fd8e->leave($__internal_6b7466a46a713e08bea4b8faade833cf5011d7b5e1d5fc9b065ce6dafa42fd8e_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_0412611303a3ed668bd3dd0fe5aa33da9c38bcce74818b96608e442c37f0152d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0412611303a3ed668bd3dd0fe5aa33da9c38bcce74818b96608e442c37f0152d->enter($__internal_0412611303a3ed668bd3dd0fe5aa33da9c38bcce74818b96608e442c37f0152d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4cf699aba40ea84582584acf078dc76ddaaf5c2830c73f01b8a351cdda2e9b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf699aba40ea84582584acf078dc76ddaaf5c2830c73f01b8a351cdda2e9b9a->enter($__internal_4cf699aba40ea84582584acf078dc76ddaaf5c2830c73f01b8a351cdda2e9b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_4cf699aba40ea84582584acf078dc76ddaaf5c2830c73f01b8a351cdda2e9b9a->leave($__internal_4cf699aba40ea84582584acf078dc76ddaaf5c2830c73f01b8a351cdda2e9b9a_prof);

        
        $__internal_0412611303a3ed668bd3dd0fe5aa33da9c38bcce74818b96608e442c37f0152d->leave($__internal_0412611303a3ed668bd3dd0fe5aa33da9c38bcce74818b96608e442c37f0152d_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4177a0600b2e2497958f859a4664c15c1be1625b0ecdc115bd8eed2733d993f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4177a0600b2e2497958f859a4664c15c1be1625b0ecdc115bd8eed2733d993f0->enter($__internal_4177a0600b2e2497958f859a4664c15c1be1625b0ecdc115bd8eed2733d993f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_19277cb57241f1cde9a8a52b6106ed3ec087ef6a3e5449b6c2bb89bc3ae22d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19277cb57241f1cde9a8a52b6106ed3ec087ef6a3e5449b6c2bb89bc3ae22d36->enter($__internal_19277cb57241f1cde9a8a52b6106ed3ec087ef6a3e5449b6c2bb89bc3ae22d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_19277cb57241f1cde9a8a52b6106ed3ec087ef6a3e5449b6c2bb89bc3ae22d36->leave($__internal_19277cb57241f1cde9a8a52b6106ed3ec087ef6a3e5449b6c2bb89bc3ae22d36_prof);

        
        $__internal_4177a0600b2e2497958f859a4664c15c1be1625b0ecdc115bd8eed2733d993f0->leave($__internal_4177a0600b2e2497958f859a4664c15c1be1625b0ecdc115bd8eed2733d993f0_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5e7202ad0cd451b6bb43b9bfe19d63f3d474fff24bb31ad6e7a95b86f4cafddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7202ad0cd451b6bb43b9bfe19d63f3d474fff24bb31ad6e7a95b86f4cafddc->enter($__internal_5e7202ad0cd451b6bb43b9bfe19d63f3d474fff24bb31ad6e7a95b86f4cafddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_64c2991d83c642cbe1557dbf5984d86580007954dda35205b45fe68c0806bbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c2991d83c642cbe1557dbf5984d86580007954dda35205b45fe68c0806bbc4->enter($__internal_64c2991d83c642cbe1557dbf5984d86580007954dda35205b45fe68c0806bbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_64c2991d83c642cbe1557dbf5984d86580007954dda35205b45fe68c0806bbc4->leave($__internal_64c2991d83c642cbe1557dbf5984d86580007954dda35205b45fe68c0806bbc4_prof);

        
        $__internal_5e7202ad0cd451b6bb43b9bfe19d63f3d474fff24bb31ad6e7a95b86f4cafddc->leave($__internal_5e7202ad0cd451b6bb43b9bfe19d63f3d474fff24bb31ad6e7a95b86f4cafddc_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d79bc4bc7b3631093007d7d03a9bcaf956e95cf3de34caa8d2a1f13f973c29f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d79bc4bc7b3631093007d7d03a9bcaf956e95cf3de34caa8d2a1f13f973c29f9->enter($__internal_d79bc4bc7b3631093007d7d03a9bcaf956e95cf3de34caa8d2a1f13f973c29f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1920114f01af152339bc2d6f61b427be919d629d196d813281fff18e916dd554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1920114f01af152339bc2d6f61b427be919d629d196d813281fff18e916dd554->enter($__internal_1920114f01af152339bc2d6f61b427be919d629d196d813281fff18e916dd554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_1920114f01af152339bc2d6f61b427be919d629d196d813281fff18e916dd554->leave($__internal_1920114f01af152339bc2d6f61b427be919d629d196d813281fff18e916dd554_prof);

        
        $__internal_d79bc4bc7b3631093007d7d03a9bcaf956e95cf3de34caa8d2a1f13f973c29f9->leave($__internal_d79bc4bc7b3631093007d7d03a9bcaf956e95cf3de34caa8d2a1f13f973c29f9_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_621baf03be4e039f27075c19506fcb446dfca7c6cf684aaac4e4b043cdbe9fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621baf03be4e039f27075c19506fcb446dfca7c6cf684aaac4e4b043cdbe9fe2->enter($__internal_621baf03be4e039f27075c19506fcb446dfca7c6cf684aaac4e4b043cdbe9fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_2783172518ac30b7344cdeed8567cc66ea4c764fad2711c1066673f0900e577a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2783172518ac30b7344cdeed8567cc66ea4c764fad2711c1066673f0900e577a->enter($__internal_2783172518ac30b7344cdeed8567cc66ea4c764fad2711c1066673f0900e577a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_2783172518ac30b7344cdeed8567cc66ea4c764fad2711c1066673f0900e577a->leave($__internal_2783172518ac30b7344cdeed8567cc66ea4c764fad2711c1066673f0900e577a_prof);

        
        $__internal_621baf03be4e039f27075c19506fcb446dfca7c6cf684aaac4e4b043cdbe9fe2->leave($__internal_621baf03be4e039f27075c19506fcb446dfca7c6cf684aaac4e4b043cdbe9fe2_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_35fea3a888a0288d2faa9c11de735bcc8f04597b0b78280789bfb5757d454dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35fea3a888a0288d2faa9c11de735bcc8f04597b0b78280789bfb5757d454dff->enter($__internal_35fea3a888a0288d2faa9c11de735bcc8f04597b0b78280789bfb5757d454dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2a394fdf5281b35217608f8b0d5ef9957e3384c9e6ca0750cbf2509e629583f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a394fdf5281b35217608f8b0d5ef9957e3384c9e6ca0750cbf2509e629583f4->enter($__internal_2a394fdf5281b35217608f8b0d5ef9957e3384c9e6ca0750cbf2509e629583f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_2a394fdf5281b35217608f8b0d5ef9957e3384c9e6ca0750cbf2509e629583f4->leave($__internal_2a394fdf5281b35217608f8b0d5ef9957e3384c9e6ca0750cbf2509e629583f4_prof);

        
        $__internal_35fea3a888a0288d2faa9c11de735bcc8f04597b0b78280789bfb5757d454dff->leave($__internal_35fea3a888a0288d2faa9c11de735bcc8f04597b0b78280789bfb5757d454dff_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c71273f416adc98812c4a8ebf9a0eef1a1d884e336baf7802f2b554b0959932a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71273f416adc98812c4a8ebf9a0eef1a1d884e336baf7802f2b554b0959932a->enter($__internal_c71273f416adc98812c4a8ebf9a0eef1a1d884e336baf7802f2b554b0959932a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3fe835f5bd6241feccb403c024e5ed071f1353598712776c9cfe5ec3c05ccdc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe835f5bd6241feccb403c024e5ed071f1353598712776c9cfe5ec3c05ccdc9->enter($__internal_3fe835f5bd6241feccb403c024e5ed071f1353598712776c9cfe5ec3c05ccdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_3fe835f5bd6241feccb403c024e5ed071f1353598712776c9cfe5ec3c05ccdc9->leave($__internal_3fe835f5bd6241feccb403c024e5ed071f1353598712776c9cfe5ec3c05ccdc9_prof);

        
        $__internal_c71273f416adc98812c4a8ebf9a0eef1a1d884e336baf7802f2b554b0959932a->leave($__internal_c71273f416adc98812c4a8ebf9a0eef1a1d884e336baf7802f2b554b0959932a_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_593a13d7c8781c35e0f818575080b95c58cd75d13472bd85946da39d8a42eb34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593a13d7c8781c35e0f818575080b95c58cd75d13472bd85946da39d8a42eb34->enter($__internal_593a13d7c8781c35e0f818575080b95c58cd75d13472bd85946da39d8a42eb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_8060307d2f325f793dc31af519b56ab4c2713ef7871dcad63cee99cb4f102735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8060307d2f325f793dc31af519b56ab4c2713ef7871dcad63cee99cb4f102735->enter($__internal_8060307d2f325f793dc31af519b56ab4c2713ef7871dcad63cee99cb4f102735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_8060307d2f325f793dc31af519b56ab4c2713ef7871dcad63cee99cb4f102735->leave($__internal_8060307d2f325f793dc31af519b56ab4c2713ef7871dcad63cee99cb4f102735_prof);

        
        $__internal_593a13d7c8781c35e0f818575080b95c58cd75d13472bd85946da39d8a42eb34->leave($__internal_593a13d7c8781c35e0f818575080b95c58cd75d13472bd85946da39d8a42eb34_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_605ac6c27686e9122358d81535f28204eb19b4f31960597ddb73957871591ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_605ac6c27686e9122358d81535f28204eb19b4f31960597ddb73957871591ba6->enter($__internal_605ac6c27686e9122358d81535f28204eb19b4f31960597ddb73957871591ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_fbed8d714cb807ad9a085021fe367f1844c9bd52a4450a60ada99f9c358d3050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbed8d714cb807ad9a085021fe367f1844c9bd52a4450a60ada99f9c358d3050->enter($__internal_fbed8d714cb807ad9a085021fe367f1844c9bd52a4450a60ada99f9c358d3050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_fbed8d714cb807ad9a085021fe367f1844c9bd52a4450a60ada99f9c358d3050->leave($__internal_fbed8d714cb807ad9a085021fe367f1844c9bd52a4450a60ada99f9c358d3050_prof);

        
        $__internal_605ac6c27686e9122358d81535f28204eb19b4f31960597ddb73957871591ba6->leave($__internal_605ac6c27686e9122358d81535f28204eb19b4f31960597ddb73957871591ba6_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ffbbc2ec617db9b2b454fdb75482bed056c38886c442149c06d218c184018fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffbbc2ec617db9b2b454fdb75482bed056c38886c442149c06d218c184018fb6->enter($__internal_ffbbc2ec617db9b2b454fdb75482bed056c38886c442149c06d218c184018fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_da67f53bd807c57ef960190ead1788e3f588e0bcb11bdbf44746b40f462e131e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da67f53bd807c57ef960190ead1788e3f588e0bcb11bdbf44746b40f462e131e->enter($__internal_da67f53bd807c57ef960190ead1788e3f588e0bcb11bdbf44746b40f462e131e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_da67f53bd807c57ef960190ead1788e3f588e0bcb11bdbf44746b40f462e131e->leave($__internal_da67f53bd807c57ef960190ead1788e3f588e0bcb11bdbf44746b40f462e131e_prof);

        
        $__internal_ffbbc2ec617db9b2b454fdb75482bed056c38886c442149c06d218c184018fb6->leave($__internal_ffbbc2ec617db9b2b454fdb75482bed056c38886c442149c06d218c184018fb6_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_de05e0f2e582cbbfaeb71f2ec578406d13e4d96f3aa88fd4c4bb2538ee110ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de05e0f2e582cbbfaeb71f2ec578406d13e4d96f3aa88fd4c4bb2538ee110ff3->enter($__internal_de05e0f2e582cbbfaeb71f2ec578406d13e4d96f3aa88fd4c4bb2538ee110ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c27cc07e4f31cd6fbf8fedfceab0d250bb819e2fa3e3b24184b63ce966eaff66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27cc07e4f31cd6fbf8fedfceab0d250bb819e2fa3e3b24184b63ce966eaff66->enter($__internal_c27cc07e4f31cd6fbf8fedfceab0d250bb819e2fa3e3b24184b63ce966eaff66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c27cc07e4f31cd6fbf8fedfceab0d250bb819e2fa3e3b24184b63ce966eaff66->leave($__internal_c27cc07e4f31cd6fbf8fedfceab0d250bb819e2fa3e3b24184b63ce966eaff66_prof);

        
        $__internal_de05e0f2e582cbbfaeb71f2ec578406d13e4d96f3aa88fd4c4bb2538ee110ff3->leave($__internal_de05e0f2e582cbbfaeb71f2ec578406d13e4d96f3aa88fd4c4bb2538ee110ff3_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_22d4c4ea6887e377c9dd3f80dc8d1e3bb4cd266643e303a4d26ca0b47c40e1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d4c4ea6887e377c9dd3f80dc8d1e3bb4cd266643e303a4d26ca0b47c40e1c1->enter($__internal_22d4c4ea6887e377c9dd3f80dc8d1e3bb4cd266643e303a4d26ca0b47c40e1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_56a8d5a8c0bdf6aab52b1c27bda7c0f79722fe663882a8413adf94f7b3174cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a8d5a8c0bdf6aab52b1c27bda7c0f79722fe663882a8413adf94f7b3174cf7->enter($__internal_56a8d5a8c0bdf6aab52b1c27bda7c0f79722fe663882a8413adf94f7b3174cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_56a8d5a8c0bdf6aab52b1c27bda7c0f79722fe663882a8413adf94f7b3174cf7->leave($__internal_56a8d5a8c0bdf6aab52b1c27bda7c0f79722fe663882a8413adf94f7b3174cf7_prof);

        
        $__internal_22d4c4ea6887e377c9dd3f80dc8d1e3bb4cd266643e303a4d26ca0b47c40e1c1->leave($__internal_22d4c4ea6887e377c9dd3f80dc8d1e3bb4cd266643e303a4d26ca0b47c40e1c1_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_2d7410020211b7cc5dcc51e71abdc9e300545abf43ed71de4efce4e952d33c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7410020211b7cc5dcc51e71abdc9e300545abf43ed71de4efce4e952d33c8c->enter($__internal_2d7410020211b7cc5dcc51e71abdc9e300545abf43ed71de4efce4e952d33c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c84782b919bee3ccbce9015b7da1bdf0b8e6d99432542d070cd6cceb186aa1ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84782b919bee3ccbce9015b7da1bdf0b8e6d99432542d070cd6cceb186aa1ff->enter($__internal_c84782b919bee3ccbce9015b7da1bdf0b8e6d99432542d070cd6cceb186aa1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c84782b919bee3ccbce9015b7da1bdf0b8e6d99432542d070cd6cceb186aa1ff->leave($__internal_c84782b919bee3ccbce9015b7da1bdf0b8e6d99432542d070cd6cceb186aa1ff_prof);

        
        $__internal_2d7410020211b7cc5dcc51e71abdc9e300545abf43ed71de4efce4e952d33c8c->leave($__internal_2d7410020211b7cc5dcc51e71abdc9e300545abf43ed71de4efce4e952d33c8c_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_8cb1fd15cf26a8e7e920a981bb25aaae5ea4762850743af83567b749794b34ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb1fd15cf26a8e7e920a981bb25aaae5ea4762850743af83567b749794b34ea->enter($__internal_8cb1fd15cf26a8e7e920a981bb25aaae5ea4762850743af83567b749794b34ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_1c401a27037192ae7963548fb9614d0cfee69e5e58c87ccb9ec9405910d70218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c401a27037192ae7963548fb9614d0cfee69e5e58c87ccb9ec9405910d70218->enter($__internal_1c401a27037192ae7963548fb9614d0cfee69e5e58c87ccb9ec9405910d70218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 190
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 196
            echo "        <label";
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
            // line 197
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_1c401a27037192ae7963548fb9614d0cfee69e5e58c87ccb9ec9405910d70218->leave($__internal_1c401a27037192ae7963548fb9614d0cfee69e5e58c87ccb9ec9405910d70218_prof);

        
        $__internal_8cb1fd15cf26a8e7e920a981bb25aaae5ea4762850743af83567b749794b34ea->leave($__internal_8cb1fd15cf26a8e7e920a981bb25aaae5ea4762850743af83567b749794b34ea_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_830e17bf926b0d59f5ba36c0b2950e2781516691dcc5c9e5917b64f181497260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830e17bf926b0d59f5ba36c0b2950e2781516691dcc5c9e5917b64f181497260->enter($__internal_830e17bf926b0d59f5ba36c0b2950e2781516691dcc5c9e5917b64f181497260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d60a47bf489f2932e6ca903c76c594fa35330707b062ee2ded7383eeffb9ea53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60a47bf489f2932e6ca903c76c594fa35330707b062ee2ded7383eeffb9ea53->enter($__internal_d60a47bf489f2932e6ca903c76c594fa35330707b062ee2ded7383eeffb9ea53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_d60a47bf489f2932e6ca903c76c594fa35330707b062ee2ded7383eeffb9ea53->leave($__internal_d60a47bf489f2932e6ca903c76c594fa35330707b062ee2ded7383eeffb9ea53_prof);

        
        $__internal_830e17bf926b0d59f5ba36c0b2950e2781516691dcc5c9e5917b64f181497260->leave($__internal_830e17bf926b0d59f5ba36c0b2950e2781516691dcc5c9e5917b64f181497260_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5f68661f606910896350bd999b3e919e5e8c1c7daed5461c86461763ec3250c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f68661f606910896350bd999b3e919e5e8c1c7daed5461c86461763ec3250c0->enter($__internal_5f68661f606910896350bd999b3e919e5e8c1c7daed5461c86461763ec3250c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d1271ec1346a49b353081da708466112e6507f89c0140bf8fe23ca43e113f869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1271ec1346a49b353081da708466112e6507f89c0140bf8fe23ca43e113f869->enter($__internal_d1271ec1346a49b353081da708466112e6507f89c0140bf8fe23ca43e113f869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_d1271ec1346a49b353081da708466112e6507f89c0140bf8fe23ca43e113f869->leave($__internal_d1271ec1346a49b353081da708466112e6507f89c0140bf8fe23ca43e113f869_prof);

        
        $__internal_5f68661f606910896350bd999b3e919e5e8c1c7daed5461c86461763ec3250c0->leave($__internal_5f68661f606910896350bd999b3e919e5e8c1c7daed5461c86461763ec3250c0_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_9740256504da1a1d9362ee3a29142eaac83c227975d3fd4ee47596524975aa61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9740256504da1a1d9362ee3a29142eaac83c227975d3fd4ee47596524975aa61->enter($__internal_9740256504da1a1d9362ee3a29142eaac83c227975d3fd4ee47596524975aa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_dc8ec459fbce5dba1cb8df0ad86064b0bce7f6c32af3267b5698b858e8d22c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8ec459fbce5dba1cb8df0ad86064b0bce7f6c32af3267b5698b858e8d22c2a->enter($__internal_dc8ec459fbce5dba1cb8df0ad86064b0bce7f6c32af3267b5698b858e8d22c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dc8ec459fbce5dba1cb8df0ad86064b0bce7f6c32af3267b5698b858e8d22c2a->leave($__internal_dc8ec459fbce5dba1cb8df0ad86064b0bce7f6c32af3267b5698b858e8d22c2a_prof);

        
        $__internal_9740256504da1a1d9362ee3a29142eaac83c227975d3fd4ee47596524975aa61->leave($__internal_9740256504da1a1d9362ee3a29142eaac83c227975d3fd4ee47596524975aa61_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_c9dea28baa05f831c61ff92eeacb28087726c390d15d327d5753f112da40af31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9dea28baa05f831c61ff92eeacb28087726c390d15d327d5753f112da40af31->enter($__internal_c9dea28baa05f831c61ff92eeacb28087726c390d15d327d5753f112da40af31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_03250716670c5f2f623f6052bcd5e891f0a40bebef9ac501c5200920af8afd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03250716670c5f2f623f6052bcd5e891f0a40bebef9ac501c5200920af8afd17->enter($__internal_03250716670c5f2f623f6052bcd5e891f0a40bebef9ac501c5200920af8afd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_03250716670c5f2f623f6052bcd5e891f0a40bebef9ac501c5200920af8afd17->leave($__internal_03250716670c5f2f623f6052bcd5e891f0a40bebef9ac501c5200920af8afd17_prof);

        
        $__internal_c9dea28baa05f831c61ff92eeacb28087726c390d15d327d5753f112da40af31->leave($__internal_c9dea28baa05f831c61ff92eeacb28087726c390d15d327d5753f112da40af31_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_518405290ed8f62dea06f2dec566866295ea1c421caf7738b70cf8abd062dbb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518405290ed8f62dea06f2dec566866295ea1c421caf7738b70cf8abd062dbb3->enter($__internal_518405290ed8f62dea06f2dec566866295ea1c421caf7738b70cf8abd062dbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_3b5a3a58c3fff975d26fe3edb6c1091e0c78e3a94e35bc25803c6d09fa37ac81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5a3a58c3fff975d26fe3edb6c1091e0c78e3a94e35bc25803c6d09fa37ac81->enter($__internal_3b5a3a58c3fff975d26fe3edb6c1091e0c78e3a94e35bc25803c6d09fa37ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3b5a3a58c3fff975d26fe3edb6c1091e0c78e3a94e35bc25803c6d09fa37ac81->leave($__internal_3b5a3a58c3fff975d26fe3edb6c1091e0c78e3a94e35bc25803c6d09fa37ac81_prof);

        
        $__internal_518405290ed8f62dea06f2dec566866295ea1c421caf7738b70cf8abd062dbb3->leave($__internal_518405290ed8f62dea06f2dec566866295ea1c421caf7738b70cf8abd062dbb3_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_926ec4aef3de144767b570d592a25ab23b52745c695e737348e3201e3d903cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926ec4aef3de144767b570d592a25ab23b52745c695e737348e3201e3d903cf2->enter($__internal_926ec4aef3de144767b570d592a25ab23b52745c695e737348e3201e3d903cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_2f3d6db36ff773bf875896c44783c1b13756979eee972fd452069546ed6bfc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3d6db36ff773bf875896c44783c1b13756979eee972fd452069546ed6bfc6e->enter($__internal_2f3d6db36ff773bf875896c44783c1b13756979eee972fd452069546ed6bfc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2f3d6db36ff773bf875896c44783c1b13756979eee972fd452069546ed6bfc6e->leave($__internal_2f3d6db36ff773bf875896c44783c1b13756979eee972fd452069546ed6bfc6e_prof);

        
        $__internal_926ec4aef3de144767b570d592a25ab23b52745c695e737348e3201e3d903cf2->leave($__internal_926ec4aef3de144767b570d592a25ab23b52745c695e737348e3201e3d903cf2_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1e5444172790923bddba2d1306c75c13afcdbe053113b46bd72cea6299b41fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5444172790923bddba2d1306c75c13afcdbe053113b46bd72cea6299b41fcb->enter($__internal_1e5444172790923bddba2d1306c75c13afcdbe053113b46bd72cea6299b41fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f099bc4733cd3e3ad52b6a392b994f2658f97f69f43d65dca9c35703e9cdf8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f099bc4733cd3e3ad52b6a392b994f2658f97f69f43d65dca9c35703e9cdf8a4->enter($__internal_f099bc4733cd3e3ad52b6a392b994f2658f97f69f43d65dca9c35703e9cdf8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_f099bc4733cd3e3ad52b6a392b994f2658f97f69f43d65dca9c35703e9cdf8a4->leave($__internal_f099bc4733cd3e3ad52b6a392b994f2658f97f69f43d65dca9c35703e9cdf8a4_prof);

        
        $__internal_1e5444172790923bddba2d1306c75c13afcdbe053113b46bd72cea6299b41fcb->leave($__internal_1e5444172790923bddba2d1306c75c13afcdbe053113b46bd72cea6299b41fcb_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c36cc6eae811dd66bec97c7a2fb02ae26cea3dbec514ff73fb96ca501c55555b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36cc6eae811dd66bec97c7a2fb02ae26cea3dbec514ff73fb96ca501c55555b->enter($__internal_c36cc6eae811dd66bec97c7a2fb02ae26cea3dbec514ff73fb96ca501c55555b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_1c80fb6c76f17b351f63b4f78baf8d5245290736b6f00e05338968dd27d008d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c80fb6c76f17b351f63b4f78baf8d5245290736b6f00e05338968dd27d008d2->enter($__internal_1c80fb6c76f17b351f63b4f78baf8d5245290736b6f00e05338968dd27d008d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_1c80fb6c76f17b351f63b4f78baf8d5245290736b6f00e05338968dd27d008d2->leave($__internal_1c80fb6c76f17b351f63b4f78baf8d5245290736b6f00e05338968dd27d008d2_prof);

        
        $__internal_c36cc6eae811dd66bec97c7a2fb02ae26cea3dbec514ff73fb96ca501c55555b->leave($__internal_c36cc6eae811dd66bec97c7a2fb02ae26cea3dbec514ff73fb96ca501c55555b_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0331f69dcdb28ea743489ab188eb962933ae281aa549a39cb60896b0dc98a8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0331f69dcdb28ea743489ab188eb962933ae281aa549a39cb60896b0dc98a8e1->enter($__internal_0331f69dcdb28ea743489ab188eb962933ae281aa549a39cb60896b0dc98a8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e75fd32c48796bdad3e42d664802893c9427b87d00de8b2e617686e7b26695eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75fd32c48796bdad3e42d664802893c9427b87d00de8b2e617686e7b26695eb->enter($__internal_e75fd32c48796bdad3e42d664802893c9427b87d00de8b2e617686e7b26695eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_e75fd32c48796bdad3e42d664802893c9427b87d00de8b2e617686e7b26695eb->leave($__internal_e75fd32c48796bdad3e42d664802893c9427b87d00de8b2e617686e7b26695eb_prof);

        
        $__internal_0331f69dcdb28ea743489ab188eb962933ae281aa549a39cb60896b0dc98a8e1->leave($__internal_0331f69dcdb28ea743489ab188eb962933ae281aa549a39cb60896b0dc98a8e1_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1061 => 262,  1058 => 261,  1050 => 259,  1046 => 258,  1044 => 257,  1038 => 256,  1036 => 255,  1027 => 254,  1017 => 249,  1015 => 248,  1013 => 247,  1007 => 246,  998 => 245,  988 => 242,  986 => 241,  984 => 240,  978 => 239,  969 => 238,  959 => 235,  957 => 234,  948 => 233,  938 => 230,  936 => 229,  927 => 228,  917 => 225,  915 => 224,  906 => 223,  896 => 220,  894 => 219,  885 => 218,  875 => 215,  873 => 214,  871 => 213,  862 => 212,  852 => 209,  850 => 208,  848 => 207,  846 => 206,  840 => 205,  831 => 204,  819 => 198,  815 => 197,  800 => 196,  796 => 193,  793 => 190,  792 => 189,  791 => 188,  789 => 187,  786 => 186,  783 => 185,  780 => 184,  777 => 183,  774 => 182,  771 => 181,  768 => 180,  765 => 179,  763 => 178,  754 => 177,  744 => 174,  735 => 173,  725 => 170,  716 => 169,  706 => 166,  704 => 165,  695 => 163,  685 => 160,  683 => 159,  674 => 158,  663 => 152,  661 => 151,  659 => 150,  656 => 148,  654 => 147,  652 => 146,  643 => 145,  632 => 141,  630 => 140,  628 => 139,  625 => 137,  623 => 136,  621 => 135,  612 => 134,  601 => 130,  595 => 127,  594 => 126,  593 => 125,  589 => 124,  585 => 123,  578 => 119,  577 => 118,  576 => 117,  572 => 116,  570 => 115,  561 => 114,  551 => 111,  549 => 110,  540 => 109,  529 => 105,  525 => 104,  521 => 103,  517 => 102,  513 => 101,  509 => 100,  505 => 99,  501 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 254,  200 => 253,  197 => 251,  195 => 245,  192 => 244,  190 => 238,  187 => 237,  185 => 233,  182 => 232,  180 => 228,  177 => 227,  175 => 223,  172 => 222,  170 => 218,  167 => 217,  165 => 212,  162 => 211,  160 => 204,  157 => 203,  154 => 201,  152 => 177,  149 => 176,  147 => 173,  144 => 172,  142 => 169,  139 => 168,  137 => 163,  134 => 162,  132 => 158,  129 => 157,  126 => 155,  124 => 145,  121 => 144,  119 => 134,  116 => 133,  114 => 114,  111 => 113,  109 => 109,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
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

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
