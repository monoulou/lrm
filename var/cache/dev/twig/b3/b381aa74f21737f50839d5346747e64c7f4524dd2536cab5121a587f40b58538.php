<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_346a57ff4db171d28f2ecbf587abe9506fb20eaaf63e212f299c65055ca367f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a5ee70d9497561dd3fc443c82a6b1aa439501be6ab86edd19552f83c11eaa521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ee70d9497561dd3fc443c82a6b1aa439501be6ab86edd19552f83c11eaa521->enter($__internal_a5ee70d9497561dd3fc443c82a6b1aa439501be6ab86edd19552f83c11eaa521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_63f6d4ab432fdeaa7be984f05894e6010fc71fd9d47cb5848bf542ff6b441a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f6d4ab432fdeaa7be984f05894e6010fc71fd9d47cb5848bf542ff6b441a00->enter($__internal_63f6d4ab432fdeaa7be984f05894e6010fc71fd9d47cb5848bf542ff6b441a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5ee70d9497561dd3fc443c82a6b1aa439501be6ab86edd19552f83c11eaa521->leave($__internal_a5ee70d9497561dd3fc443c82a6b1aa439501be6ab86edd19552f83c11eaa521_prof);

        
        $__internal_63f6d4ab432fdeaa7be984f05894e6010fc71fd9d47cb5848bf542ff6b441a00->leave($__internal_63f6d4ab432fdeaa7be984f05894e6010fc71fd9d47cb5848bf542ff6b441a00_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef865ab327749d1307b15fb3783e84583f8185428175b89f5a065bbd7f4b374c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef865ab327749d1307b15fb3783e84583f8185428175b89f5a065bbd7f4b374c->enter($__internal_ef865ab327749d1307b15fb3783e84583f8185428175b89f5a065bbd7f4b374c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ffdff1b1a427517caf01d4ebf47ea14914dd9f75cf72029148ef300dce611521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdff1b1a427517caf01d4ebf47ea14914dd9f75cf72029148ef300dce611521->enter($__internal_ffdff1b1a427517caf01d4ebf47ea14914dd9f75cf72029148ef300dce611521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ffdff1b1a427517caf01d4ebf47ea14914dd9f75cf72029148ef300dce611521->leave($__internal_ffdff1b1a427517caf01d4ebf47ea14914dd9f75cf72029148ef300dce611521_prof);

        
        $__internal_ef865ab327749d1307b15fb3783e84583f8185428175b89f5a065bbd7f4b374c->leave($__internal_ef865ab327749d1307b15fb3783e84583f8185428175b89f5a065bbd7f4b374c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
