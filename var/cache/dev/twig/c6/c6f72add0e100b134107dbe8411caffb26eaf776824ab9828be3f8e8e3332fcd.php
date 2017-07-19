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
        $__internal_155b1f8146f8f3a493c10051b0e194f7e4c62adb04da92eaaec3299de8806a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155b1f8146f8f3a493c10051b0e194f7e4c62adb04da92eaaec3299de8806a95->enter($__internal_155b1f8146f8f3a493c10051b0e194f7e4c62adb04da92eaaec3299de8806a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_aa75f76fd82d4d9a2dd83109e4fb3413b90769a5cfd0d4719184b3492d00d2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa75f76fd82d4d9a2dd83109e4fb3413b90769a5cfd0d4719184b3492d00d2d2->enter($__internal_aa75f76fd82d4d9a2dd83109e4fb3413b90769a5cfd0d4719184b3492d00d2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_155b1f8146f8f3a493c10051b0e194f7e4c62adb04da92eaaec3299de8806a95->leave($__internal_155b1f8146f8f3a493c10051b0e194f7e4c62adb04da92eaaec3299de8806a95_prof);

        
        $__internal_aa75f76fd82d4d9a2dd83109e4fb3413b90769a5cfd0d4719184b3492d00d2d2->leave($__internal_aa75f76fd82d4d9a2dd83109e4fb3413b90769a5cfd0d4719184b3492d00d2d2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cfc46b6d16834db05d8be16c8955a6246a994956eabb3447bcf43eaa15625108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc46b6d16834db05d8be16c8955a6246a994956eabb3447bcf43eaa15625108->enter($__internal_cfc46b6d16834db05d8be16c8955a6246a994956eabb3447bcf43eaa15625108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3eaf57fbc240d7f50002f571d35be39a6951549902511de4bc780b07ccbd2fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eaf57fbc240d7f50002f571d35be39a6951549902511de4bc780b07ccbd2fa0->enter($__internal_3eaf57fbc240d7f50002f571d35be39a6951549902511de4bc780b07ccbd2fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_3eaf57fbc240d7f50002f571d35be39a6951549902511de4bc780b07ccbd2fa0->leave($__internal_3eaf57fbc240d7f50002f571d35be39a6951549902511de4bc780b07ccbd2fa0_prof);

        
        $__internal_cfc46b6d16834db05d8be16c8955a6246a994956eabb3447bcf43eaa15625108->leave($__internal_cfc46b6d16834db05d8be16c8955a6246a994956eabb3447bcf43eaa15625108_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e2579eb9aafd3c41846deb7e116a5cb5f9cd5102709d8520f8e175d634d4aeae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2579eb9aafd3c41846deb7e116a5cb5f9cd5102709d8520f8e175d634d4aeae->enter($__internal_e2579eb9aafd3c41846deb7e116a5cb5f9cd5102709d8520f8e175d634d4aeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b5ce330e719ca8e051398309f5542768f454ac472e5c384f81460143641dcf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ce330e719ca8e051398309f5542768f454ac472e5c384f81460143641dcf70->enter($__internal_b5ce330e719ca8e051398309f5542768f454ac472e5c384f81460143641dcf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b5ce330e719ca8e051398309f5542768f454ac472e5c384f81460143641dcf70->leave($__internal_b5ce330e719ca8e051398309f5542768f454ac472e5c384f81460143641dcf70_prof);

        
        $__internal_e2579eb9aafd3c41846deb7e116a5cb5f9cd5102709d8520f8e175d634d4aeae->leave($__internal_e2579eb9aafd3c41846deb7e116a5cb5f9cd5102709d8520f8e175d634d4aeae_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c185c98126b197f805b172124731a54a2ffb2e2486ea995f9c5e453297c1ac8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c185c98126b197f805b172124731a54a2ffb2e2486ea995f9c5e453297c1ac8b->enter($__internal_c185c98126b197f805b172124731a54a2ffb2e2486ea995f9c5e453297c1ac8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ff1717e34bd09da152aee377b93eb3d67cf76e8198eba4ae4dfe593e57519e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1717e34bd09da152aee377b93eb3d67cf76e8198eba4ae4dfe593e57519e06->enter($__internal_ff1717e34bd09da152aee377b93eb3d67cf76e8198eba4ae4dfe593e57519e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ff1717e34bd09da152aee377b93eb3d67cf76e8198eba4ae4dfe593e57519e06->leave($__internal_ff1717e34bd09da152aee377b93eb3d67cf76e8198eba4ae4dfe593e57519e06_prof);

        
        $__internal_c185c98126b197f805b172124731a54a2ffb2e2486ea995f9c5e453297c1ac8b->leave($__internal_c185c98126b197f805b172124731a54a2ffb2e2486ea995f9c5e453297c1ac8b_prof);

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
