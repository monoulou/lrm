<?php

/* :email:email.txt.twig */
class __TwigTemplate_ad74fe1189ba55b9ffd934a958a8ab4393948957587f153e605eccb4d1f2fdaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75d6e91786f88c666b3fe2c35a3dc77b500fbddef1905d5d89f374dcca129ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d6e91786f88c666b3fe2c35a3dc77b500fbddef1905d5d89f374dcca129ed6->enter($__internal_75d6e91786f88c666b3fe2c35a3dc77b500fbddef1905d5d89f374dcca129ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:email.txt.twig"));

        $__internal_feda0afdc832a6d15e5cccca34596d5351fe8b8635f94444cd700480fa5096f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feda0afdc832a6d15e5cccca34596d5351fe8b8635f94444cd700480fa5096f9->enter($__internal_feda0afdc832a6d15e5cccca34596d5351fe8b8635f94444cd700480fa5096f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_75d6e91786f88c666b3fe2c35a3dc77b500fbddef1905d5d89f374dcca129ed6->leave($__internal_75d6e91786f88c666b3fe2c35a3dc77b500fbddef1905d5d89f374dcca129ed6_prof);

        
        $__internal_feda0afdc832a6d15e5cccca34596d5351fe8b8635f94444cd700480fa5096f9->leave($__internal_feda0afdc832a6d15e5cccca34596d5351fe8b8635f94444cd700480fa5096f9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7996070ff180b5c6a4a509d8f40ca94589f1b98c72971c10ba8dfa442d574d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7996070ff180b5c6a4a509d8f40ca94589f1b98c72971c10ba8dfa442d574d32->enter($__internal_7996070ff180b5c6a4a509d8f40ca94589f1b98c72971c10ba8dfa442d574d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c2bd95d5c1e964721f53de1b151cb5cb982a05ea047ac6b90ec84307452b300f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bd95d5c1e964721f53de1b151cb5cb982a05ea047ac6b90ec84307452b300f->enter($__internal_c2bd95d5c1e964721f53de1b151cb5cb982a05ea047ac6b90ec84307452b300f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c2bd95d5c1e964721f53de1b151cb5cb982a05ea047ac6b90ec84307452b300f->leave($__internal_c2bd95d5c1e964721f53de1b151cb5cb982a05ea047ac6b90ec84307452b300f_prof);

        
        $__internal_7996070ff180b5c6a4a509d8f40ca94589f1b98c72971c10ba8dfa442d574d32->leave($__internal_7996070ff180b5c6a4a509d8f40ca94589f1b98c72971c10ba8dfa442d574d32_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_444f3edc8287559b24145619d163ccbd21e1ceacf9ed3de731f53c7e1726a755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_444f3edc8287559b24145619d163ccbd21e1ceacf9ed3de731f53c7e1726a755->enter($__internal_444f3edc8287559b24145619d163ccbd21e1ceacf9ed3de731f53c7e1726a755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5153f1e2e2a18ba835eb35cfad641f35a3934e98b1163c7c1bd7e4bd7ed4d0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5153f1e2e2a18ba835eb35cfad641f35a3934e98b1163c7c1bd7e4bd7ed4d0f7->enter($__internal_5153f1e2e2a18ba835eb35cfad641f35a3934e98b1163c7c1bd7e4bd7ed4d0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5153f1e2e2a18ba835eb35cfad641f35a3934e98b1163c7c1bd7e4bd7ed4d0f7->leave($__internal_5153f1e2e2a18ba835eb35cfad641f35a3934e98b1163c7c1bd7e4bd7ed4d0f7_prof);

        
        $__internal_444f3edc8287559b24145619d163ccbd21e1ceacf9ed3de731f53c7e1726a755->leave($__internal_444f3edc8287559b24145619d163ccbd21e1ceacf9ed3de731f53c7e1726a755_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e245192e3a39185c334d43825568622157412d782427ddc1ebff4638f35fb2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e245192e3a39185c334d43825568622157412d782427ddc1ebff4638f35fb2fc->enter($__internal_e245192e3a39185c334d43825568622157412d782427ddc1ebff4638f35fb2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_46c35d2f66e9c6ada1cd46a972d3bd92b3478fbb26d2e279bd767ce66c6483ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c35d2f66e9c6ada1cd46a972d3bd92b3478fbb26d2e279bd767ce66c6483ea->enter($__internal_46c35d2f66e9c6ada1cd46a972d3bd92b3478fbb26d2e279bd767ce66c6483ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_46c35d2f66e9c6ada1cd46a972d3bd92b3478fbb26d2e279bd767ce66c6483ea->leave($__internal_46c35d2f66e9c6ada1cd46a972d3bd92b3478fbb26d2e279bd767ce66c6483ea_prof);

        
        $__internal_e245192e3a39185c334d43825568622157412d782427ddc1ebff4638f35fb2fc->leave($__internal_e245192e3a39185c334d43825568622157412d782427ddc1ebff4638f35fb2fc_prof);

    }

    public function getTemplateName()
    {
        return ":email:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}", ":email:email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\app/Resources\\views/email/email.txt.twig");
    }
}
