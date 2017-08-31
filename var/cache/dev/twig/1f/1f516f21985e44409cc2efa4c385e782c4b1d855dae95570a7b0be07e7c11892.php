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
        $__internal_06f4bf2d996fdd3062fe2faa5768f1173841d66045be9619f6cbd18b6da94be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f4bf2d996fdd3062fe2faa5768f1173841d66045be9619f6cbd18b6da94be0->enter($__internal_06f4bf2d996fdd3062fe2faa5768f1173841d66045be9619f6cbd18b6da94be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/email.txt.twig"));

        $__internal_ec190eea471e154dc9423507a769bca35f36aae40ebc97b1f8e7c7a9da4b998a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec190eea471e154dc9423507a769bca35f36aae40ebc97b1f8e7c7a9da4b998a->enter($__internal_ec190eea471e154dc9423507a769bca35f36aae40ebc97b1f8e7c7a9da4b998a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_06f4bf2d996fdd3062fe2faa5768f1173841d66045be9619f6cbd18b6da94be0->leave($__internal_06f4bf2d996fdd3062fe2faa5768f1173841d66045be9619f6cbd18b6da94be0_prof);

        
        $__internal_ec190eea471e154dc9423507a769bca35f36aae40ebc97b1f8e7c7a9da4b998a->leave($__internal_ec190eea471e154dc9423507a769bca35f36aae40ebc97b1f8e7c7a9da4b998a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1a462535b8d3bed9c3ff5e07690d4b36879b8edd31540e8cee18b4fe06e4bd2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a462535b8d3bed9c3ff5e07690d4b36879b8edd31540e8cee18b4fe06e4bd2a->enter($__internal_1a462535b8d3bed9c3ff5e07690d4b36879b8edd31540e8cee18b4fe06e4bd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0045de8a187bf10a31ba204308408d88578d4564b8f43486680c8ab5be6a4c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0045de8a187bf10a31ba204308408d88578d4564b8f43486680c8ab5be6a4c51->enter($__internal_0045de8a187bf10a31ba204308408d88578d4564b8f43486680c8ab5be6a4c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0045de8a187bf10a31ba204308408d88578d4564b8f43486680c8ab5be6a4c51->leave($__internal_0045de8a187bf10a31ba204308408d88578d4564b8f43486680c8ab5be6a4c51_prof);

        
        $__internal_1a462535b8d3bed9c3ff5e07690d4b36879b8edd31540e8cee18b4fe06e4bd2a->leave($__internal_1a462535b8d3bed9c3ff5e07690d4b36879b8edd31540e8cee18b4fe06e4bd2a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_38c78b1499d7fe34130978129620cf803bc2eb6b70b68fbb060034684cf00f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c78b1499d7fe34130978129620cf803bc2eb6b70b68fbb060034684cf00f1a->enter($__internal_38c78b1499d7fe34130978129620cf803bc2eb6b70b68fbb060034684cf00f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c21917a714f948852d293bbbcce7d93dae7c3a842325b6c92a71a73e6f91f325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21917a714f948852d293bbbcce7d93dae7c3a842325b6c92a71a73e6f91f325->enter($__internal_c21917a714f948852d293bbbcce7d93dae7c3a842325b6c92a71a73e6f91f325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c21917a714f948852d293bbbcce7d93dae7c3a842325b6c92a71a73e6f91f325->leave($__internal_c21917a714f948852d293bbbcce7d93dae7c3a842325b6c92a71a73e6f91f325_prof);

        
        $__internal_38c78b1499d7fe34130978129620cf803bc2eb6b70b68fbb060034684cf00f1a->leave($__internal_38c78b1499d7fe34130978129620cf803bc2eb6b70b68fbb060034684cf00f1a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dcd1c0adc6b21e79c26940a8ad2202a1d9a79b3304e6f1487357acecf1893e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd1c0adc6b21e79c26940a8ad2202a1d9a79b3304e6f1487357acecf1893e84->enter($__internal_dcd1c0adc6b21e79c26940a8ad2202a1d9a79b3304e6f1487357acecf1893e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_6dff3602655dc137c6297f7cfdfad9b5d14d1cc812772c28e87366d70c7b8cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dff3602655dc137c6297f7cfdfad9b5d14d1cc812772c28e87366d70c7b8cec->enter($__internal_6dff3602655dc137c6297f7cfdfad9b5d14d1cc812772c28e87366d70c7b8cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6dff3602655dc137c6297f7cfdfad9b5d14d1cc812772c28e87366d70c7b8cec->leave($__internal_6dff3602655dc137c6297f7cfdfad9b5d14d1cc812772c28e87366d70c7b8cec_prof);

        
        $__internal_dcd1c0adc6b21e79c26940a8ad2202a1d9a79b3304e6f1487357acecf1893e84->leave($__internal_dcd1c0adc6b21e79c26940a8ad2202a1d9a79b3304e6f1487357acecf1893e84_prof);

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
