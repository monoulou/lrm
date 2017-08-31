<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_385fbc7eef871ead08562761a0c9a0a835554d91c8f75f32d1eecb64b280fddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d27238520e1e377e2d8c40cac0be01839a98dad89d96fafb69ced6ae571ffa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d27238520e1e377e2d8c40cac0be01839a98dad89d96fafb69ced6ae571ffa1->enter($__internal_4d27238520e1e377e2d8c40cac0be01839a98dad89d96fafb69ced6ae571ffa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_53dc7357346d751ce274925996b06d770c6de5dbb2c196f549453515d738114b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53dc7357346d751ce274925996b06d770c6de5dbb2c196f549453515d738114b->enter($__internal_53dc7357346d751ce274925996b06d770c6de5dbb2c196f549453515d738114b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d27238520e1e377e2d8c40cac0be01839a98dad89d96fafb69ced6ae571ffa1->leave($__internal_4d27238520e1e377e2d8c40cac0be01839a98dad89d96fafb69ced6ae571ffa1_prof);

        
        $__internal_53dc7357346d751ce274925996b06d770c6de5dbb2c196f549453515d738114b->leave($__internal_53dc7357346d751ce274925996b06d770c6de5dbb2c196f549453515d738114b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f763f62986d4d529b14282ddb880f24adc3efd8de43f754ec9516587fe4735ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f763f62986d4d529b14282ddb880f24adc3efd8de43f754ec9516587fe4735ec->enter($__internal_f763f62986d4d529b14282ddb880f24adc3efd8de43f754ec9516587fe4735ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aed6b67ac92038a1caccc60976027147ece70e2e9cf01246564a74256cef1f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed6b67ac92038a1caccc60976027147ece70e2e9cf01246564a74256cef1f76->enter($__internal_aed6b67ac92038a1caccc60976027147ece70e2e9cf01246564a74256cef1f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_aed6b67ac92038a1caccc60976027147ece70e2e9cf01246564a74256cef1f76->leave($__internal_aed6b67ac92038a1caccc60976027147ece70e2e9cf01246564a74256cef1f76_prof);

        
        $__internal_f763f62986d4d529b14282ddb880f24adc3efd8de43f754ec9516587fe4735ec->leave($__internal_f763f62986d4d529b14282ddb880f24adc3efd8de43f754ec9516587fe4735ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
