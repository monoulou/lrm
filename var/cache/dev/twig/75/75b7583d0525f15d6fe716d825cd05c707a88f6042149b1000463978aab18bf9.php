<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_895de07ad700f15ded3e458eb502aec2b97b7a8cfb5d8a44e0d21a7970e8b902 extends Twig_Template
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
        $__internal_1775489488681070b1a2db1bbab95fcd4c24a3aac836eddc02e00f612f496499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1775489488681070b1a2db1bbab95fcd4c24a3aac836eddc02e00f612f496499->enter($__internal_1775489488681070b1a2db1bbab95fcd4c24a3aac836eddc02e00f612f496499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_f4c654dd1c98789f6812c3b04e99d20f37caf69d0c3b7f00166350ca3119af5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c654dd1c98789f6812c3b04e99d20f37caf69d0c3b7f00166350ca3119af5c->enter($__internal_f4c654dd1c98789f6812c3b04e99d20f37caf69d0c3b7f00166350ca3119af5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1775489488681070b1a2db1bbab95fcd4c24a3aac836eddc02e00f612f496499->leave($__internal_1775489488681070b1a2db1bbab95fcd4c24a3aac836eddc02e00f612f496499_prof);

        
        $__internal_f4c654dd1c98789f6812c3b04e99d20f37caf69d0c3b7f00166350ca3119af5c->leave($__internal_f4c654dd1c98789f6812c3b04e99d20f37caf69d0c3b7f00166350ca3119af5c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d87de2422d25de7cba4cd8e740b7c804f6e9e6c82be0727d1754549fdda5404d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87de2422d25de7cba4cd8e740b7c804f6e9e6c82be0727d1754549fdda5404d->enter($__internal_d87de2422d25de7cba4cd8e740b7c804f6e9e6c82be0727d1754549fdda5404d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_70d016ae8c80ecd8e46d1b3564527d2faa02f8f5a42fc824470007ee7ae11e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d016ae8c80ecd8e46d1b3564527d2faa02f8f5a42fc824470007ee7ae11e3e->enter($__internal_70d016ae8c80ecd8e46d1b3564527d2faa02f8f5a42fc824470007ee7ae11e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_70d016ae8c80ecd8e46d1b3564527d2faa02f8f5a42fc824470007ee7ae11e3e->leave($__internal_70d016ae8c80ecd8e46d1b3564527d2faa02f8f5a42fc824470007ee7ae11e3e_prof);

        
        $__internal_d87de2422d25de7cba4cd8e740b7c804f6e9e6c82be0727d1754549fdda5404d->leave($__internal_d87de2422d25de7cba4cd8e740b7c804f6e9e6c82be0727d1754549fdda5404d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_372162c10ce4d9470bfdd74040c984be6a0c88de08e0bb612e18aed05b11e52e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372162c10ce4d9470bfdd74040c984be6a0c88de08e0bb612e18aed05b11e52e->enter($__internal_372162c10ce4d9470bfdd74040c984be6a0c88de08e0bb612e18aed05b11e52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_23b825b453018468b859e166f4cf894a39c2cdd06c17e9b37080533cee264136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b825b453018468b859e166f4cf894a39c2cdd06c17e9b37080533cee264136->enter($__internal_23b825b453018468b859e166f4cf894a39c2cdd06c17e9b37080533cee264136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_23b825b453018468b859e166f4cf894a39c2cdd06c17e9b37080533cee264136->leave($__internal_23b825b453018468b859e166f4cf894a39c2cdd06c17e9b37080533cee264136_prof);

        
        $__internal_372162c10ce4d9470bfdd74040c984be6a0c88de08e0bb612e18aed05b11e52e->leave($__internal_372162c10ce4d9470bfdd74040c984be6a0c88de08e0bb612e18aed05b11e52e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3286b1d45de951ee9b19ffaa8c816e0b2ebbee4996c569c2e8b28f4be9749539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3286b1d45de951ee9b19ffaa8c816e0b2ebbee4996c569c2e8b28f4be9749539->enter($__internal_3286b1d45de951ee9b19ffaa8c816e0b2ebbee4996c569c2e8b28f4be9749539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c4361867521cdfe06ff96b6e21c60d782ee073df018f10779222dd5651213629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4361867521cdfe06ff96b6e21c60d782ee073df018f10779222dd5651213629->enter($__internal_c4361867521cdfe06ff96b6e21c60d782ee073df018f10779222dd5651213629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c4361867521cdfe06ff96b6e21c60d782ee073df018f10779222dd5651213629->leave($__internal_c4361867521cdfe06ff96b6e21c60d782ee073df018f10779222dd5651213629_prof);

        
        $__internal_3286b1d45de951ee9b19ffaa8c816e0b2ebbee4996c569c2e8b28f4be9749539->leave($__internal_3286b1d45de951ee9b19ffaa8c816e0b2ebbee4996c569c2e8b28f4be9749539_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
