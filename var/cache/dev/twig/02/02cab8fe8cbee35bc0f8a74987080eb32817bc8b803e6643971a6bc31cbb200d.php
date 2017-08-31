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
        $__internal_1d6fc1523329e3a3beb5883450db3cd12df28b72a921ae0ae88acb589d5aea51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6fc1523329e3a3beb5883450db3cd12df28b72a921ae0ae88acb589d5aea51->enter($__internal_1d6fc1523329e3a3beb5883450db3cd12df28b72a921ae0ae88acb589d5aea51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_274c3c5ba6a39f887d7811541601979e3bc24c746b85491d7fde2ea5db07cb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274c3c5ba6a39f887d7811541601979e3bc24c746b85491d7fde2ea5db07cb2f->enter($__internal_274c3c5ba6a39f887d7811541601979e3bc24c746b85491d7fde2ea5db07cb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1d6fc1523329e3a3beb5883450db3cd12df28b72a921ae0ae88acb589d5aea51->leave($__internal_1d6fc1523329e3a3beb5883450db3cd12df28b72a921ae0ae88acb589d5aea51_prof);

        
        $__internal_274c3c5ba6a39f887d7811541601979e3bc24c746b85491d7fde2ea5db07cb2f->leave($__internal_274c3c5ba6a39f887d7811541601979e3bc24c746b85491d7fde2ea5db07cb2f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c642716c75053dc49ca2324f31708dc850f9576aac2d123de253b0745e63c526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c642716c75053dc49ca2324f31708dc850f9576aac2d123de253b0745e63c526->enter($__internal_c642716c75053dc49ca2324f31708dc850f9576aac2d123de253b0745e63c526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9c692284010a97ffad0491dfe2e3bb7d7137a13d53ddaefbac185aa2581ee2be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c692284010a97ffad0491dfe2e3bb7d7137a13d53ddaefbac185aa2581ee2be->enter($__internal_9c692284010a97ffad0491dfe2e3bb7d7137a13d53ddaefbac185aa2581ee2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_9c692284010a97ffad0491dfe2e3bb7d7137a13d53ddaefbac185aa2581ee2be->leave($__internal_9c692284010a97ffad0491dfe2e3bb7d7137a13d53ddaefbac185aa2581ee2be_prof);

        
        $__internal_c642716c75053dc49ca2324f31708dc850f9576aac2d123de253b0745e63c526->leave($__internal_c642716c75053dc49ca2324f31708dc850f9576aac2d123de253b0745e63c526_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ba69d4886f5d96a52ef6d62a496c1465d78e8627f5f72bea41e6ddbe95c0b8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba69d4886f5d96a52ef6d62a496c1465d78e8627f5f72bea41e6ddbe95c0b8fd->enter($__internal_ba69d4886f5d96a52ef6d62a496c1465d78e8627f5f72bea41e6ddbe95c0b8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0db729883e701f423b873b2fe2b9becb4f55829f20278c3d58e5c4f8b3b1c4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db729883e701f423b873b2fe2b9becb4f55829f20278c3d58e5c4f8b3b1c4b7->enter($__internal_0db729883e701f423b873b2fe2b9becb4f55829f20278c3d58e5c4f8b3b1c4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0db729883e701f423b873b2fe2b9becb4f55829f20278c3d58e5c4f8b3b1c4b7->leave($__internal_0db729883e701f423b873b2fe2b9becb4f55829f20278c3d58e5c4f8b3b1c4b7_prof);

        
        $__internal_ba69d4886f5d96a52ef6d62a496c1465d78e8627f5f72bea41e6ddbe95c0b8fd->leave($__internal_ba69d4886f5d96a52ef6d62a496c1465d78e8627f5f72bea41e6ddbe95c0b8fd_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6a765ab644133bff28fe7b78459f018c577c6c17323514c74bab6e138519cf2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a765ab644133bff28fe7b78459f018c577c6c17323514c74bab6e138519cf2b->enter($__internal_6a765ab644133bff28fe7b78459f018c577c6c17323514c74bab6e138519cf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_48d32cd02af7128aedc497c1bf3f28086a15d078b4243723a952a40a2893587a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d32cd02af7128aedc497c1bf3f28086a15d078b4243723a952a40a2893587a->enter($__internal_48d32cd02af7128aedc497c1bf3f28086a15d078b4243723a952a40a2893587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_48d32cd02af7128aedc497c1bf3f28086a15d078b4243723a952a40a2893587a->leave($__internal_48d32cd02af7128aedc497c1bf3f28086a15d078b4243723a952a40a2893587a_prof);

        
        $__internal_6a765ab644133bff28fe7b78459f018c577c6c17323514c74bab6e138519cf2b->leave($__internal_6a765ab644133bff28fe7b78459f018c577c6c17323514c74bab6e138519cf2b_prof);

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
