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
        $__internal_5b9e00740484060a7c93684e725deb0827327e19ea7c3757481d9cec3d49a270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9e00740484060a7c93684e725deb0827327e19ea7c3757481d9cec3d49a270->enter($__internal_5b9e00740484060a7c93684e725deb0827327e19ea7c3757481d9cec3d49a270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/email.txt.twig"));

        $__internal_bc3101989d54b75928f27d87c2d411c35bb896fbbbe2df1c3b2587b27915e6cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3101989d54b75928f27d87c2d411c35bb896fbbbe2df1c3b2587b27915e6cc->enter($__internal_bc3101989d54b75928f27d87c2d411c35bb896fbbbe2df1c3b2587b27915e6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5b9e00740484060a7c93684e725deb0827327e19ea7c3757481d9cec3d49a270->leave($__internal_5b9e00740484060a7c93684e725deb0827327e19ea7c3757481d9cec3d49a270_prof);

        
        $__internal_bc3101989d54b75928f27d87c2d411c35bb896fbbbe2df1c3b2587b27915e6cc->leave($__internal_bc3101989d54b75928f27d87c2d411c35bb896fbbbe2df1c3b2587b27915e6cc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a58d37f05954fbf200f0e62049d79cb2d2a3436e1d4cabc72054a7a581c5a591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58d37f05954fbf200f0e62049d79cb2d2a3436e1d4cabc72054a7a581c5a591->enter($__internal_a58d37f05954fbf200f0e62049d79cb2d2a3436e1d4cabc72054a7a581c5a591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_55f7349e82f08edc8fe99f4c694b81806b2b9c12059ea2d74870681330e7f41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f7349e82f08edc8fe99f4c694b81806b2b9c12059ea2d74870681330e7f41a->enter($__internal_55f7349e82f08edc8fe99f4c694b81806b2b9c12059ea2d74870681330e7f41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_55f7349e82f08edc8fe99f4c694b81806b2b9c12059ea2d74870681330e7f41a->leave($__internal_55f7349e82f08edc8fe99f4c694b81806b2b9c12059ea2d74870681330e7f41a_prof);

        
        $__internal_a58d37f05954fbf200f0e62049d79cb2d2a3436e1d4cabc72054a7a581c5a591->leave($__internal_a58d37f05954fbf200f0e62049d79cb2d2a3436e1d4cabc72054a7a581c5a591_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7a819f96280517ab89c5e42840d15f565d55576df5b0a4cb754e91d384fc02e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a819f96280517ab89c5e42840d15f565d55576df5b0a4cb754e91d384fc02e4->enter($__internal_7a819f96280517ab89c5e42840d15f565d55576df5b0a4cb754e91d384fc02e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d0726375fb38aeaf1e7b4d2be265619bf434a637858f748a4ffbd0f9d2d0f739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0726375fb38aeaf1e7b4d2be265619bf434a637858f748a4ffbd0f9d2d0f739->enter($__internal_d0726375fb38aeaf1e7b4d2be265619bf434a637858f748a4ffbd0f9d2d0f739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d0726375fb38aeaf1e7b4d2be265619bf434a637858f748a4ffbd0f9d2d0f739->leave($__internal_d0726375fb38aeaf1e7b4d2be265619bf434a637858f748a4ffbd0f9d2d0f739_prof);

        
        $__internal_7a819f96280517ab89c5e42840d15f565d55576df5b0a4cb754e91d384fc02e4->leave($__internal_7a819f96280517ab89c5e42840d15f565d55576df5b0a4cb754e91d384fc02e4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_49653e3c93c5b67c036c725c247ae7f5266ff41dd4430afb7aa1da740151be53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49653e3c93c5b67c036c725c247ae7f5266ff41dd4430afb7aa1da740151be53->enter($__internal_49653e3c93c5b67c036c725c247ae7f5266ff41dd4430afb7aa1da740151be53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_9be2b47a87edbfa5a1069bd2a6029586d9e73c7905f31cfc0f7ecb602cfdaa5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be2b47a87edbfa5a1069bd2a6029586d9e73c7905f31cfc0f7ecb602cfdaa5e->enter($__internal_9be2b47a87edbfa5a1069bd2a6029586d9e73c7905f31cfc0f7ecb602cfdaa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9be2b47a87edbfa5a1069bd2a6029586d9e73c7905f31cfc0f7ecb602cfdaa5e->leave($__internal_9be2b47a87edbfa5a1069bd2a6029586d9e73c7905f31cfc0f7ecb602cfdaa5e_prof);

        
        $__internal_49653e3c93c5b67c036c725c247ae7f5266ff41dd4430afb7aa1da740151be53->leave($__internal_49653e3c93c5b67c036c725c247ae7f5266ff41dd4430afb7aa1da740151be53_prof);

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
