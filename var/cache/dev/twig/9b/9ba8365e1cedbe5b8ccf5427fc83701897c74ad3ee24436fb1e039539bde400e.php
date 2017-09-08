<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_0e6a3ef218e23d2c15468e1d10cbba1d8d45fcec8f03755558512a6f50759df1 extends Twig_Template
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
        $__internal_e95bd5bc24c7b0a564216bc4fe89bb04d3760b3df2e70b3a2e7b53c1155271e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95bd5bc24c7b0a564216bc4fe89bb04d3760b3df2e70b3a2e7b53c1155271e5->enter($__internal_e95bd5bc24c7b0a564216bc4fe89bb04d3760b3df2e70b3a2e7b53c1155271e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_bf072f2db4c97e8c2034ae7784df1c9dd85788c4b452a19d95db7d04c4b8615f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf072f2db4c97e8c2034ae7784df1c9dd85788c4b452a19d95db7d04c4b8615f->enter($__internal_bf072f2db4c97e8c2034ae7784df1c9dd85788c4b452a19d95db7d04c4b8615f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e95bd5bc24c7b0a564216bc4fe89bb04d3760b3df2e70b3a2e7b53c1155271e5->leave($__internal_e95bd5bc24c7b0a564216bc4fe89bb04d3760b3df2e70b3a2e7b53c1155271e5_prof);

        
        $__internal_bf072f2db4c97e8c2034ae7784df1c9dd85788c4b452a19d95db7d04c4b8615f->leave($__internal_bf072f2db4c97e8c2034ae7784df1c9dd85788c4b452a19d95db7d04c4b8615f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_23f50ab422ba53c04bdeea502d964c461f400f3b97828828d4f454af000f96e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f50ab422ba53c04bdeea502d964c461f400f3b97828828d4f454af000f96e4->enter($__internal_23f50ab422ba53c04bdeea502d964c461f400f3b97828828d4f454af000f96e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_bee51ea3262a56e3e3ba9fdc0e9d98af620127914829407deb68a231a9967429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee51ea3262a56e3e3ba9fdc0e9d98af620127914829407deb68a231a9967429->enter($__internal_bee51ea3262a56e3e3ba9fdc0e9d98af620127914829407deb68a231a9967429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_bee51ea3262a56e3e3ba9fdc0e9d98af620127914829407deb68a231a9967429->leave($__internal_bee51ea3262a56e3e3ba9fdc0e9d98af620127914829407deb68a231a9967429_prof);

        
        $__internal_23f50ab422ba53c04bdeea502d964c461f400f3b97828828d4f454af000f96e4->leave($__internal_23f50ab422ba53c04bdeea502d964c461f400f3b97828828d4f454af000f96e4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_72ac728b4842295dc216387e17f634e62e43bfcde588e87ebb1fe2fa1a7260b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ac728b4842295dc216387e17f634e62e43bfcde588e87ebb1fe2fa1a7260b8->enter($__internal_72ac728b4842295dc216387e17f634e62e43bfcde588e87ebb1fe2fa1a7260b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_49e1be8771d0b385cbc552f3b5e0523308eb9e2c3fda357c1e0dc862b3812076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e1be8771d0b385cbc552f3b5e0523308eb9e2c3fda357c1e0dc862b3812076->enter($__internal_49e1be8771d0b385cbc552f3b5e0523308eb9e2c3fda357c1e0dc862b3812076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_49e1be8771d0b385cbc552f3b5e0523308eb9e2c3fda357c1e0dc862b3812076->leave($__internal_49e1be8771d0b385cbc552f3b5e0523308eb9e2c3fda357c1e0dc862b3812076_prof);

        
        $__internal_72ac728b4842295dc216387e17f634e62e43bfcde588e87ebb1fe2fa1a7260b8->leave($__internal_72ac728b4842295dc216387e17f634e62e43bfcde588e87ebb1fe2fa1a7260b8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e5f39f91c8ef55de99276dd8a7bfd5a3466f24fdaad8b628ccd4339f1d0fc34d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f39f91c8ef55de99276dd8a7bfd5a3466f24fdaad8b628ccd4339f1d0fc34d->enter($__internal_e5f39f91c8ef55de99276dd8a7bfd5a3466f24fdaad8b628ccd4339f1d0fc34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d89f1e95d5aedbbfedb48c932f9845544711dc613e50906f58fa85e2cbb6e993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89f1e95d5aedbbfedb48c932f9845544711dc613e50906f58fa85e2cbb6e993->enter($__internal_d89f1e95d5aedbbfedb48c932f9845544711dc613e50906f58fa85e2cbb6e993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d89f1e95d5aedbbfedb48c932f9845544711dc613e50906f58fa85e2cbb6e993->leave($__internal_d89f1e95d5aedbbfedb48c932f9845544711dc613e50906f58fa85e2cbb6e993_prof);

        
        $__internal_e5f39f91c8ef55de99276dd8a7bfd5a3466f24fdaad8b628ccd4339f1d0fc34d->leave($__internal_e5f39f91c8ef55de99276dd8a7bfd5a3466f24fdaad8b628ccd4339f1d0fc34d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
