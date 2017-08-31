<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_1fde650fed87ed42f5eab2fa72566a1c1e957499a68df2c15f0ffe14972924e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_2ff246fe6224f736e6888748d1c111a232279de72408b0e7fd4502e74b9ecd17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff246fe6224f736e6888748d1c111a232279de72408b0e7fd4502e74b9ecd17->enter($__internal_2ff246fe6224f736e6888748d1c111a232279de72408b0e7fd4502e74b9ecd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_860e602bb1ca7cdc2d027077dc5cbd31221a1f11ce9980442a006563a70c99f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860e602bb1ca7cdc2d027077dc5cbd31221a1f11ce9980442a006563a70c99f6->enter($__internal_860e602bb1ca7cdc2d027077dc5cbd31221a1f11ce9980442a006563a70c99f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ff246fe6224f736e6888748d1c111a232279de72408b0e7fd4502e74b9ecd17->leave($__internal_2ff246fe6224f736e6888748d1c111a232279de72408b0e7fd4502e74b9ecd17_prof);

        
        $__internal_860e602bb1ca7cdc2d027077dc5cbd31221a1f11ce9980442a006563a70c99f6->leave($__internal_860e602bb1ca7cdc2d027077dc5cbd31221a1f11ce9980442a006563a70c99f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78e799e7a621b66c24fda3b638228f24367b5ccaecf8055c11bab0fe70e00803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e799e7a621b66c24fda3b638228f24367b5ccaecf8055c11bab0fe70e00803->enter($__internal_78e799e7a621b66c24fda3b638228f24367b5ccaecf8055c11bab0fe70e00803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_716186ffcc27477a13c0778b03daa644519d08b8c404a7c154617f036355d39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716186ffcc27477a13c0778b03daa644519d08b8c404a7c154617f036355d39a->enter($__internal_716186ffcc27477a13c0778b03daa644519d08b8c404a7c154617f036355d39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_716186ffcc27477a13c0778b03daa644519d08b8c404a7c154617f036355d39a->leave($__internal_716186ffcc27477a13c0778b03daa644519d08b8c404a7c154617f036355d39a_prof);

        
        $__internal_78e799e7a621b66c24fda3b638228f24367b5ccaecf8055c11bab0fe70e00803->leave($__internal_78e799e7a621b66c24fda3b638228f24367b5ccaecf8055c11bab0fe70e00803_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
