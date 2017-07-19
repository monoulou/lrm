<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_eb92d11bb7a962bba0ece8998d894640e3aebbdfbc7d7985ba426f75c182643a extends Twig_Template
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
        $__internal_3c98275521b671c36c015290128c260d0e032c1084bc4da253b0582a0dd787ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c98275521b671c36c015290128c260d0e032c1084bc4da253b0582a0dd787ca->enter($__internal_3c98275521b671c36c015290128c260d0e032c1084bc4da253b0582a0dd787ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_3419fd1adb00ac2bc7e56c034d5b4f008d6ed0cb7dcf481e99c75141e41678b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3419fd1adb00ac2bc7e56c034d5b4f008d6ed0cb7dcf481e99c75141e41678b7->enter($__internal_3419fd1adb00ac2bc7e56c034d5b4f008d6ed0cb7dcf481e99c75141e41678b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3c98275521b671c36c015290128c260d0e032c1084bc4da253b0582a0dd787ca->leave($__internal_3c98275521b671c36c015290128c260d0e032c1084bc4da253b0582a0dd787ca_prof);

        
        $__internal_3419fd1adb00ac2bc7e56c034d5b4f008d6ed0cb7dcf481e99c75141e41678b7->leave($__internal_3419fd1adb00ac2bc7e56c034d5b4f008d6ed0cb7dcf481e99c75141e41678b7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e301a4e42c5326a275bda12afabe2231b2a87fedcc202b0e9c782490c8956781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e301a4e42c5326a275bda12afabe2231b2a87fedcc202b0e9c782490c8956781->enter($__internal_e301a4e42c5326a275bda12afabe2231b2a87fedcc202b0e9c782490c8956781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d6c372b516643def9eac5f05b39756be4b2e3c14e12b2698d2dfd3088632e46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c372b516643def9eac5f05b39756be4b2e3c14e12b2698d2dfd3088632e46c->enter($__internal_d6c372b516643def9eac5f05b39756be4b2e3c14e12b2698d2dfd3088632e46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d6c372b516643def9eac5f05b39756be4b2e3c14e12b2698d2dfd3088632e46c->leave($__internal_d6c372b516643def9eac5f05b39756be4b2e3c14e12b2698d2dfd3088632e46c_prof);

        
        $__internal_e301a4e42c5326a275bda12afabe2231b2a87fedcc202b0e9c782490c8956781->leave($__internal_e301a4e42c5326a275bda12afabe2231b2a87fedcc202b0e9c782490c8956781_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_80a1617f5eca523fa070ea901b8dd62437664d2c0eeff87a3102c8f1e734d7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a1617f5eca523fa070ea901b8dd62437664d2c0eeff87a3102c8f1e734d7da->enter($__internal_80a1617f5eca523fa070ea901b8dd62437664d2c0eeff87a3102c8f1e734d7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_92ddb760c59acddec7d3f53ea0e41f7ace5ad9495e25c48e61621063b6907d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ddb760c59acddec7d3f53ea0e41f7ace5ad9495e25c48e61621063b6907d0d->enter($__internal_92ddb760c59acddec7d3f53ea0e41f7ace5ad9495e25c48e61621063b6907d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_92ddb760c59acddec7d3f53ea0e41f7ace5ad9495e25c48e61621063b6907d0d->leave($__internal_92ddb760c59acddec7d3f53ea0e41f7ace5ad9495e25c48e61621063b6907d0d_prof);

        
        $__internal_80a1617f5eca523fa070ea901b8dd62437664d2c0eeff87a3102c8f1e734d7da->leave($__internal_80a1617f5eca523fa070ea901b8dd62437664d2c0eeff87a3102c8f1e734d7da_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d742b6fe4352d0b6dc5bf66ac7e473909cb84dd4e30528722935f82bc2cdfb6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d742b6fe4352d0b6dc5bf66ac7e473909cb84dd4e30528722935f82bc2cdfb6b->enter($__internal_d742b6fe4352d0b6dc5bf66ac7e473909cb84dd4e30528722935f82bc2cdfb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_45c0392da0becbe1c1550507ede8a57019bdc918c1f87e4d9a47723d24e3f405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c0392da0becbe1c1550507ede8a57019bdc918c1f87e4d9a47723d24e3f405->enter($__internal_45c0392da0becbe1c1550507ede8a57019bdc918c1f87e4d9a47723d24e3f405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_45c0392da0becbe1c1550507ede8a57019bdc918c1f87e4d9a47723d24e3f405->leave($__internal_45c0392da0becbe1c1550507ede8a57019bdc918c1f87e4d9a47723d24e3f405_prof);

        
        $__internal_d742b6fe4352d0b6dc5bf66ac7e473909cb84dd4e30528722935f82bc2cdfb6b->leave($__internal_d742b6fe4352d0b6dc5bf66ac7e473909cb84dd4e30528722935f82bc2cdfb6b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
