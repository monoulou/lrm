<?php

/* email/email.txt.twig */
class __TwigTemplate_53b0ef6df8215ddc5cbef5bd1a3e7baa0c26333105b71a969bab4e6f98f27e26 extends Twig_Template
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
        $__internal_caae86377657477159bcc5fd89c0910d3d3d5b5e35bc8013049774c97cdc8cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caae86377657477159bcc5fd89c0910d3d3d5b5e35bc8013049774c97cdc8cbb->enter($__internal_caae86377657477159bcc5fd89c0910d3d3d5b5e35bc8013049774c97cdc8cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/email.txt.twig"));

        $__internal_1153e915bc1f4ce5d029ee89d642ff32c36d3fe4e6150366c7b991aa034c9f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1153e915bc1f4ce5d029ee89d642ff32c36d3fe4e6150366c7b991aa034c9f13->enter($__internal_1153e915bc1f4ce5d029ee89d642ff32c36d3fe4e6150366c7b991aa034c9f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_caae86377657477159bcc5fd89c0910d3d3d5b5e35bc8013049774c97cdc8cbb->leave($__internal_caae86377657477159bcc5fd89c0910d3d3d5b5e35bc8013049774c97cdc8cbb_prof);

        
        $__internal_1153e915bc1f4ce5d029ee89d642ff32c36d3fe4e6150366c7b991aa034c9f13->leave($__internal_1153e915bc1f4ce5d029ee89d642ff32c36d3fe4e6150366c7b991aa034c9f13_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a132a12f863495754facb403659aa0d69125c1ab8c9f8730e5c885c9e724709f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a132a12f863495754facb403659aa0d69125c1ab8c9f8730e5c885c9e724709f->enter($__internal_a132a12f863495754facb403659aa0d69125c1ab8c9f8730e5c885c9e724709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_31a6ec9609c8815f5854b8553d39b25b5523557b002b172d877b2b6b5668eb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a6ec9609c8815f5854b8553d39b25b5523557b002b172d877b2b6b5668eb56->enter($__internal_31a6ec9609c8815f5854b8553d39b25b5523557b002b172d877b2b6b5668eb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_31a6ec9609c8815f5854b8553d39b25b5523557b002b172d877b2b6b5668eb56->leave($__internal_31a6ec9609c8815f5854b8553d39b25b5523557b002b172d877b2b6b5668eb56_prof);

        
        $__internal_a132a12f863495754facb403659aa0d69125c1ab8c9f8730e5c885c9e724709f->leave($__internal_a132a12f863495754facb403659aa0d69125c1ab8c9f8730e5c885c9e724709f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b8a9e9275785d8bb6adc32349d4d6c829afeb7e39d0cbbc7b3918cc341bcaeba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a9e9275785d8bb6adc32349d4d6c829afeb7e39d0cbbc7b3918cc341bcaeba->enter($__internal_b8a9e9275785d8bb6adc32349d4d6c829afeb7e39d0cbbc7b3918cc341bcaeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_aa8ef3e7ab9cee133864e3e3a7be9117c1dfcd4ca0ba7957653d79d7a37271ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8ef3e7ab9cee133864e3e3a7be9117c1dfcd4ca0ba7957653d79d7a37271ec->enter($__internal_aa8ef3e7ab9cee133864e3e3a7be9117c1dfcd4ca0ba7957653d79d7a37271ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aa8ef3e7ab9cee133864e3e3a7be9117c1dfcd4ca0ba7957653d79d7a37271ec->leave($__internal_aa8ef3e7ab9cee133864e3e3a7be9117c1dfcd4ca0ba7957653d79d7a37271ec_prof);

        
        $__internal_b8a9e9275785d8bb6adc32349d4d6c829afeb7e39d0cbbc7b3918cc341bcaeba->leave($__internal_b8a9e9275785d8bb6adc32349d4d6c829afeb7e39d0cbbc7b3918cc341bcaeba_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b9103d99c324481a49476abee4d4a118372cb87ae10f3d8dde9c2d8b5632e2a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9103d99c324481a49476abee4d4a118372cb87ae10f3d8dde9c2d8b5632e2a7->enter($__internal_b9103d99c324481a49476abee4d4a118372cb87ae10f3d8dde9c2d8b5632e2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_414ea58832a1ac101d14601ffcf208b33ce12aae38c710faad00a2f12ee81c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414ea58832a1ac101d14601ffcf208b33ce12aae38c710faad00a2f12ee81c1b->enter($__internal_414ea58832a1ac101d14601ffcf208b33ce12aae38c710faad00a2f12ee81c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_414ea58832a1ac101d14601ffcf208b33ce12aae38c710faad00a2f12ee81c1b->leave($__internal_414ea58832a1ac101d14601ffcf208b33ce12aae38c710faad00a2f12ee81c1b_prof);

        
        $__internal_b9103d99c324481a49476abee4d4a118372cb87ae10f3d8dde9c2d8b5632e2a7->leave($__internal_b9103d99c324481a49476abee4d4a118372cb87ae10f3d8dde9c2d8b5632e2a7_prof);

    }

    public function getTemplateName()
    {
        return "email/email.txt.twig";
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
{% block body_html %}{% endblock %}", "email/email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\email\\email.txt.twig");
    }
}
