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
        $__internal_a89de88c9c9ac91f64b6b77f254b8f441c96b7896c13ab0f711f73e9bd7b73eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89de88c9c9ac91f64b6b77f254b8f441c96b7896c13ab0f711f73e9bd7b73eb->enter($__internal_a89de88c9c9ac91f64b6b77f254b8f441c96b7896c13ab0f711f73e9bd7b73eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_cfe44de9448ad8c4e1824697b4ebb40155f07d11861b1f0aa75b64aa8544d333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe44de9448ad8c4e1824697b4ebb40155f07d11861b1f0aa75b64aa8544d333->enter($__internal_cfe44de9448ad8c4e1824697b4ebb40155f07d11861b1f0aa75b64aa8544d333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a89de88c9c9ac91f64b6b77f254b8f441c96b7896c13ab0f711f73e9bd7b73eb->leave($__internal_a89de88c9c9ac91f64b6b77f254b8f441c96b7896c13ab0f711f73e9bd7b73eb_prof);

        
        $__internal_cfe44de9448ad8c4e1824697b4ebb40155f07d11861b1f0aa75b64aa8544d333->leave($__internal_cfe44de9448ad8c4e1824697b4ebb40155f07d11861b1f0aa75b64aa8544d333_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61ced890e2fa97c295219bfa0fb8d0c222635e5530f491b9384e52c85e9aee11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ced890e2fa97c295219bfa0fb8d0c222635e5530f491b9384e52c85e9aee11->enter($__internal_61ced890e2fa97c295219bfa0fb8d0c222635e5530f491b9384e52c85e9aee11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a47e5826826cd3ed86d0946a59da38053775718d0ea83a046730727cd4492d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a47e5826826cd3ed86d0946a59da38053775718d0ea83a046730727cd4492d4->enter($__internal_3a47e5826826cd3ed86d0946a59da38053775718d0ea83a046730727cd4492d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_3a47e5826826cd3ed86d0946a59da38053775718d0ea83a046730727cd4492d4->leave($__internal_3a47e5826826cd3ed86d0946a59da38053775718d0ea83a046730727cd4492d4_prof);

        
        $__internal_61ced890e2fa97c295219bfa0fb8d0c222635e5530f491b9384e52c85e9aee11->leave($__internal_61ced890e2fa97c295219bfa0fb8d0c222635e5530f491b9384e52c85e9aee11_prof);

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
