<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_31eafc9b02fa8740fc883de33cdd76061e4bb02d2140fd54f05d733aca5bf050 extends Twig_Template
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
        $__internal_edda5057a8eb0ee8cc0f027d26118cb5c6a8d8d2f02166d8dab3bf529405753b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edda5057a8eb0ee8cc0f027d26118cb5c6a8d8d2f02166d8dab3bf529405753b->enter($__internal_edda5057a8eb0ee8cc0f027d26118cb5c6a8d8d2f02166d8dab3bf529405753b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_c07a0e1119bff14739dd3e69776487c1cb050fb9f7f101fef13d0485a5ca6963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07a0e1119bff14739dd3e69776487c1cb050fb9f7f101fef13d0485a5ca6963->enter($__internal_c07a0e1119bff14739dd3e69776487c1cb050fb9f7f101fef13d0485a5ca6963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_edda5057a8eb0ee8cc0f027d26118cb5c6a8d8d2f02166d8dab3bf529405753b->leave($__internal_edda5057a8eb0ee8cc0f027d26118cb5c6a8d8d2f02166d8dab3bf529405753b_prof);

        
        $__internal_c07a0e1119bff14739dd3e69776487c1cb050fb9f7f101fef13d0485a5ca6963->leave($__internal_c07a0e1119bff14739dd3e69776487c1cb050fb9f7f101fef13d0485a5ca6963_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d4da474f3f4facc23aedc66e76ac10725dca73cd437f91892e7695e0acd653b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4da474f3f4facc23aedc66e76ac10725dca73cd437f91892e7695e0acd653b3->enter($__internal_d4da474f3f4facc23aedc66e76ac10725dca73cd437f91892e7695e0acd653b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_83c42c55d61bb7dc802a02b8a50f864b2bb37c972532d6781ccdfd5ec50252a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c42c55d61bb7dc802a02b8a50f864b2bb37c972532d6781ccdfd5ec50252a6->enter($__internal_83c42c55d61bb7dc802a02b8a50f864b2bb37c972532d6781ccdfd5ec50252a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_83c42c55d61bb7dc802a02b8a50f864b2bb37c972532d6781ccdfd5ec50252a6->leave($__internal_83c42c55d61bb7dc802a02b8a50f864b2bb37c972532d6781ccdfd5ec50252a6_prof);

        
        $__internal_d4da474f3f4facc23aedc66e76ac10725dca73cd437f91892e7695e0acd653b3->leave($__internal_d4da474f3f4facc23aedc66e76ac10725dca73cd437f91892e7695e0acd653b3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ce26059e124cf5ef0c64b4575e6cadd0b71d0a8f6392e6e7fd11ebc495adb8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce26059e124cf5ef0c64b4575e6cadd0b71d0a8f6392e6e7fd11ebc495adb8a3->enter($__internal_ce26059e124cf5ef0c64b4575e6cadd0b71d0a8f6392e6e7fd11ebc495adb8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_978233d2a8026523a28c52d6a1df891dcd0d0b9177f9469c3a974fbc51823b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978233d2a8026523a28c52d6a1df891dcd0d0b9177f9469c3a974fbc51823b9d->enter($__internal_978233d2a8026523a28c52d6a1df891dcd0d0b9177f9469c3a974fbc51823b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_978233d2a8026523a28c52d6a1df891dcd0d0b9177f9469c3a974fbc51823b9d->leave($__internal_978233d2a8026523a28c52d6a1df891dcd0d0b9177f9469c3a974fbc51823b9d_prof);

        
        $__internal_ce26059e124cf5ef0c64b4575e6cadd0b71d0a8f6392e6e7fd11ebc495adb8a3->leave($__internal_ce26059e124cf5ef0c64b4575e6cadd0b71d0a8f6392e6e7fd11ebc495adb8a3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0f8e9afc4f1227916e19a3facd27ba127ceeda00c41133179d5b28ac92bbb589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8e9afc4f1227916e19a3facd27ba127ceeda00c41133179d5b28ac92bbb589->enter($__internal_0f8e9afc4f1227916e19a3facd27ba127ceeda00c41133179d5b28ac92bbb589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_13794b34724f245877d1536f7f3a37253fd9df8fb20c4d18cfc3f9575e81a13b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13794b34724f245877d1536f7f3a37253fd9df8fb20c4d18cfc3f9575e81a13b->enter($__internal_13794b34724f245877d1536f7f3a37253fd9df8fb20c4d18cfc3f9575e81a13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_13794b34724f245877d1536f7f3a37253fd9df8fb20c4d18cfc3f9575e81a13b->leave($__internal_13794b34724f245877d1536f7f3a37253fd9df8fb20c4d18cfc3f9575e81a13b_prof);

        
        $__internal_0f8e9afc4f1227916e19a3facd27ba127ceeda00c41133179d5b28ac92bbb589->leave($__internal_0f8e9afc4f1227916e19a3facd27ba127ceeda00c41133179d5b28ac92bbb589_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
