<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_5b927e3d92d0af1bbd532f4c04d237f5cf8a7d5c0ecf691597dfb9d7f2c0d2ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_8db0dbf7e0fd6c81518edb30e398614c81ba0853eccc783294ba1c1d973243f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db0dbf7e0fd6c81518edb30e398614c81ba0853eccc783294ba1c1d973243f8->enter($__internal_8db0dbf7e0fd6c81518edb30e398614c81ba0853eccc783294ba1c1d973243f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_a78d957a79ff8e13ac5360322920c6152eb100bd64712a940d2a7afd32fa2246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78d957a79ff8e13ac5360322920c6152eb100bd64712a940d2a7afd32fa2246->enter($__internal_a78d957a79ff8e13ac5360322920c6152eb100bd64712a940d2a7afd32fa2246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8db0dbf7e0fd6c81518edb30e398614c81ba0853eccc783294ba1c1d973243f8->leave($__internal_8db0dbf7e0fd6c81518edb30e398614c81ba0853eccc783294ba1c1d973243f8_prof);

        
        $__internal_a78d957a79ff8e13ac5360322920c6152eb100bd64712a940d2a7afd32fa2246->leave($__internal_a78d957a79ff8e13ac5360322920c6152eb100bd64712a940d2a7afd32fa2246_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bee8daa044f3ad70a22b2056387010a589c8f697947a2e4888d142025765db59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee8daa044f3ad70a22b2056387010a589c8f697947a2e4888d142025765db59->enter($__internal_bee8daa044f3ad70a22b2056387010a589c8f697947a2e4888d142025765db59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d6ac8ceb55f73cdb68a676736e6cfadb0eae768b29f2e8fd1f1ef3033f6491f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6ac8ceb55f73cdb68a676736e6cfadb0eae768b29f2e8fd1f1ef3033f6491f->enter($__internal_8d6ac8ceb55f73cdb68a676736e6cfadb0eae768b29f2e8fd1f1ef3033f6491f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_8d6ac8ceb55f73cdb68a676736e6cfadb0eae768b29f2e8fd1f1ef3033f6491f->leave($__internal_8d6ac8ceb55f73cdb68a676736e6cfadb0eae768b29f2e8fd1f1ef3033f6491f_prof);

        
        $__internal_bee8daa044f3ad70a22b2056387010a589c8f697947a2e4888d142025765db59->leave($__internal_bee8daa044f3ad70a22b2056387010a589c8f697947a2e4888d142025765db59_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
