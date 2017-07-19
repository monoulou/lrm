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
        $__internal_d0a431f91ae0e434826ee34d444cebb6f0aa535f6393f07ebde05ad5efe9e130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a431f91ae0e434826ee34d444cebb6f0aa535f6393f07ebde05ad5efe9e130->enter($__internal_d0a431f91ae0e434826ee34d444cebb6f0aa535f6393f07ebde05ad5efe9e130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_af42b3d2905c94f1b8bda756a25decde9f67a190f0c5b9dac2acf3b905385bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af42b3d2905c94f1b8bda756a25decde9f67a190f0c5b9dac2acf3b905385bc8->enter($__internal_af42b3d2905c94f1b8bda756a25decde9f67a190f0c5b9dac2acf3b905385bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d0a431f91ae0e434826ee34d444cebb6f0aa535f6393f07ebde05ad5efe9e130->leave($__internal_d0a431f91ae0e434826ee34d444cebb6f0aa535f6393f07ebde05ad5efe9e130_prof);

        
        $__internal_af42b3d2905c94f1b8bda756a25decde9f67a190f0c5b9dac2acf3b905385bc8->leave($__internal_af42b3d2905c94f1b8bda756a25decde9f67a190f0c5b9dac2acf3b905385bc8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_32b8381105fa044ef7fbce7e31917fb7d4313106da9bfc7a7adb39806469bbeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b8381105fa044ef7fbce7e31917fb7d4313106da9bfc7a7adb39806469bbeb->enter($__internal_32b8381105fa044ef7fbce7e31917fb7d4313106da9bfc7a7adb39806469bbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3325f89f85be64368c975b6425245de5eb1a540da315d188f7c10ddaf2d35435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3325f89f85be64368c975b6425245de5eb1a540da315d188f7c10ddaf2d35435->enter($__internal_3325f89f85be64368c975b6425245de5eb1a540da315d188f7c10ddaf2d35435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_3325f89f85be64368c975b6425245de5eb1a540da315d188f7c10ddaf2d35435->leave($__internal_3325f89f85be64368c975b6425245de5eb1a540da315d188f7c10ddaf2d35435_prof);

        
        $__internal_32b8381105fa044ef7fbce7e31917fb7d4313106da9bfc7a7adb39806469bbeb->leave($__internal_32b8381105fa044ef7fbce7e31917fb7d4313106da9bfc7a7adb39806469bbeb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_77eb09874c6b486220e954ad26171845634c4aa64aadfdb1d4ffd2a14f611bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77eb09874c6b486220e954ad26171845634c4aa64aadfdb1d4ffd2a14f611bf6->enter($__internal_77eb09874c6b486220e954ad26171845634c4aa64aadfdb1d4ffd2a14f611bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_30deb601b5eb297c217ed4db07e74a8e6f2e43323b0556f174e9189ff7a81b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30deb601b5eb297c217ed4db07e74a8e6f2e43323b0556f174e9189ff7a81b06->enter($__internal_30deb601b5eb297c217ed4db07e74a8e6f2e43323b0556f174e9189ff7a81b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_30deb601b5eb297c217ed4db07e74a8e6f2e43323b0556f174e9189ff7a81b06->leave($__internal_30deb601b5eb297c217ed4db07e74a8e6f2e43323b0556f174e9189ff7a81b06_prof);

        
        $__internal_77eb09874c6b486220e954ad26171845634c4aa64aadfdb1d4ffd2a14f611bf6->leave($__internal_77eb09874c6b486220e954ad26171845634c4aa64aadfdb1d4ffd2a14f611bf6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_99bf0c1a641ef4c35e4c5b7346f78b773cd7edd458b080afe95548221ef68b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99bf0c1a641ef4c35e4c5b7346f78b773cd7edd458b080afe95548221ef68b84->enter($__internal_99bf0c1a641ef4c35e4c5b7346f78b773cd7edd458b080afe95548221ef68b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dbdb97e0035f6dbc9df5e31dda991eca881449c62d800e009c8a4fb8545b269e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbdb97e0035f6dbc9df5e31dda991eca881449c62d800e009c8a4fb8545b269e->enter($__internal_dbdb97e0035f6dbc9df5e31dda991eca881449c62d800e009c8a4fb8545b269e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dbdb97e0035f6dbc9df5e31dda991eca881449c62d800e009c8a4fb8545b269e->leave($__internal_dbdb97e0035f6dbc9df5e31dda991eca881449c62d800e009c8a4fb8545b269e_prof);

        
        $__internal_99bf0c1a641ef4c35e4c5b7346f78b773cd7edd458b080afe95548221ef68b84->leave($__internal_99bf0c1a641ef4c35e4c5b7346f78b773cd7edd458b080afe95548221ef68b84_prof);

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
