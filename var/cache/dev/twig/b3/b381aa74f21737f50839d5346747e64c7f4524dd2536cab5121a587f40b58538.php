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
        $__internal_a48691a7a69446506207ed572cb10c35e02594441ceed5d86f18ad2bab339f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48691a7a69446506207ed572cb10c35e02594441ceed5d86f18ad2bab339f48->enter($__internal_a48691a7a69446506207ed572cb10c35e02594441ceed5d86f18ad2bab339f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_c419c0a20de6d2e2201e92e62b49e74af246faac84829aedd8f076b85feabec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c419c0a20de6d2e2201e92e62b49e74af246faac84829aedd8f076b85feabec9->enter($__internal_c419c0a20de6d2e2201e92e62b49e74af246faac84829aedd8f076b85feabec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a48691a7a69446506207ed572cb10c35e02594441ceed5d86f18ad2bab339f48->leave($__internal_a48691a7a69446506207ed572cb10c35e02594441ceed5d86f18ad2bab339f48_prof);

        
        $__internal_c419c0a20de6d2e2201e92e62b49e74af246faac84829aedd8f076b85feabec9->leave($__internal_c419c0a20de6d2e2201e92e62b49e74af246faac84829aedd8f076b85feabec9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdac0c6b99736794e3c16a07fb5f415b8d200fad76d49da037404c037af2daa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdac0c6b99736794e3c16a07fb5f415b8d200fad76d49da037404c037af2daa6->enter($__internal_cdac0c6b99736794e3c16a07fb5f415b8d200fad76d49da037404c037af2daa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c3dd4c17f8d56bf7706da4fab44b144d1ac358f336a9d3da62cb7bcd0d0c66d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3dd4c17f8d56bf7706da4fab44b144d1ac358f336a9d3da62cb7bcd0d0c66d3->enter($__internal_c3dd4c17f8d56bf7706da4fab44b144d1ac358f336a9d3da62cb7bcd0d0c66d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c3dd4c17f8d56bf7706da4fab44b144d1ac358f336a9d3da62cb7bcd0d0c66d3->leave($__internal_c3dd4c17f8d56bf7706da4fab44b144d1ac358f336a9d3da62cb7bcd0d0c66d3_prof);

        
        $__internal_cdac0c6b99736794e3c16a07fb5f415b8d200fad76d49da037404c037af2daa6->leave($__internal_cdac0c6b99736794e3c16a07fb5f415b8d200fad76d49da037404c037af2daa6_prof);

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
