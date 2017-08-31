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
        $__internal_2be905089f49de6c6bd669347c68af1120d8a006bf2e98277c57f791ea15b1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be905089f49de6c6bd669347c68af1120d8a006bf2e98277c57f791ea15b1de->enter($__internal_2be905089f49de6c6bd669347c68af1120d8a006bf2e98277c57f791ea15b1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/email.txt.twig"));

        $__internal_21a9ec254418c0b0bebf9cdb8075087feed6ca1c9885668e58616283dfa04fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a9ec254418c0b0bebf9cdb8075087feed6ca1c9885668e58616283dfa04fb8->enter($__internal_21a9ec254418c0b0bebf9cdb8075087feed6ca1c9885668e58616283dfa04fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2be905089f49de6c6bd669347c68af1120d8a006bf2e98277c57f791ea15b1de->leave($__internal_2be905089f49de6c6bd669347c68af1120d8a006bf2e98277c57f791ea15b1de_prof);

        
        $__internal_21a9ec254418c0b0bebf9cdb8075087feed6ca1c9885668e58616283dfa04fb8->leave($__internal_21a9ec254418c0b0bebf9cdb8075087feed6ca1c9885668e58616283dfa04fb8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ff4e0fedc56a49043c13e78c5ef17eae043ec788d3e874c355626a6af61a225b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4e0fedc56a49043c13e78c5ef17eae043ec788d3e874c355626a6af61a225b->enter($__internal_ff4e0fedc56a49043c13e78c5ef17eae043ec788d3e874c355626a6af61a225b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_fe93d8d36a120a9af89d91a99791f9498c1adc2071b3ea1bbbc17109c631d98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe93d8d36a120a9af89d91a99791f9498c1adc2071b3ea1bbbc17109c631d98e->enter($__internal_fe93d8d36a120a9af89d91a99791f9498c1adc2071b3ea1bbbc17109c631d98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_fe93d8d36a120a9af89d91a99791f9498c1adc2071b3ea1bbbc17109c631d98e->leave($__internal_fe93d8d36a120a9af89d91a99791f9498c1adc2071b3ea1bbbc17109c631d98e_prof);

        
        $__internal_ff4e0fedc56a49043c13e78c5ef17eae043ec788d3e874c355626a6af61a225b->leave($__internal_ff4e0fedc56a49043c13e78c5ef17eae043ec788d3e874c355626a6af61a225b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_825a4fad8035b2f9fff7fede3a19d0e931544efd6136dbc2ece2fcb1143490f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825a4fad8035b2f9fff7fede3a19d0e931544efd6136dbc2ece2fcb1143490f3->enter($__internal_825a4fad8035b2f9fff7fede3a19d0e931544efd6136dbc2ece2fcb1143490f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2b5c5327e0666d51ecbe9a965985c4adc717e0400cbca40508695c1f4507e7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5c5327e0666d51ecbe9a965985c4adc717e0400cbca40508695c1f4507e7d1->enter($__internal_2b5c5327e0666d51ecbe9a965985c4adc717e0400cbca40508695c1f4507e7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2b5c5327e0666d51ecbe9a965985c4adc717e0400cbca40508695c1f4507e7d1->leave($__internal_2b5c5327e0666d51ecbe9a965985c4adc717e0400cbca40508695c1f4507e7d1_prof);

        
        $__internal_825a4fad8035b2f9fff7fede3a19d0e931544efd6136dbc2ece2fcb1143490f3->leave($__internal_825a4fad8035b2f9fff7fede3a19d0e931544efd6136dbc2ece2fcb1143490f3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_35e89be83ccbe7fd5c579808ccd1cb9b461283a7e06c7eabef109c56fd4cd92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e89be83ccbe7fd5c579808ccd1cb9b461283a7e06c7eabef109c56fd4cd92a->enter($__internal_35e89be83ccbe7fd5c579808ccd1cb9b461283a7e06c7eabef109c56fd4cd92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d6e44c280d85552127234f765a4419344ca97189c39cd23d6e86c3dd260a6426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e44c280d85552127234f765a4419344ca97189c39cd23d6e86c3dd260a6426->enter($__internal_d6e44c280d85552127234f765a4419344ca97189c39cd23d6e86c3dd260a6426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d6e44c280d85552127234f765a4419344ca97189c39cd23d6e86c3dd260a6426->leave($__internal_d6e44c280d85552127234f765a4419344ca97189c39cd23d6e86c3dd260a6426_prof);

        
        $__internal_35e89be83ccbe7fd5c579808ccd1cb9b461283a7e06c7eabef109c56fd4cd92a->leave($__internal_35e89be83ccbe7fd5c579808ccd1cb9b461283a7e06c7eabef109c56fd4cd92a_prof);

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
