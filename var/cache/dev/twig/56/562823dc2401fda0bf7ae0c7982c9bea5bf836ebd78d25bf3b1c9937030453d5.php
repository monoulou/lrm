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
        $__internal_e3f5c5b3649a97fbdd2f92dfb35bf1079c50f75a33a38071fd3dde0c259da482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f5c5b3649a97fbdd2f92dfb35bf1079c50f75a33a38071fd3dde0c259da482->enter($__internal_e3f5c5b3649a97fbdd2f92dfb35bf1079c50f75a33a38071fd3dde0c259da482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_33a39c4036cd9ae4f20313438ddaa47f5a35cb29e5779ef39c165c51e340f83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a39c4036cd9ae4f20313438ddaa47f5a35cb29e5779ef39c165c51e340f83f->enter($__internal_33a39c4036cd9ae4f20313438ddaa47f5a35cb29e5779ef39c165c51e340f83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3f5c5b3649a97fbdd2f92dfb35bf1079c50f75a33a38071fd3dde0c259da482->leave($__internal_e3f5c5b3649a97fbdd2f92dfb35bf1079c50f75a33a38071fd3dde0c259da482_prof);

        
        $__internal_33a39c4036cd9ae4f20313438ddaa47f5a35cb29e5779ef39c165c51e340f83f->leave($__internal_33a39c4036cd9ae4f20313438ddaa47f5a35cb29e5779ef39c165c51e340f83f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa23ee4f02efd192163beaddcab705b35e37b712bd91a2f3158acbc6548c5f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa23ee4f02efd192163beaddcab705b35e37b712bd91a2f3158acbc6548c5f34->enter($__internal_fa23ee4f02efd192163beaddcab705b35e37b712bd91a2f3158acbc6548c5f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e0d822411a8750065cb7cbaed817d7636cb2307d869c2d828c0e445e77b60994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d822411a8750065cb7cbaed817d7636cb2307d869c2d828c0e445e77b60994->enter($__internal_e0d822411a8750065cb7cbaed817d7636cb2307d869c2d828c0e445e77b60994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_e0d822411a8750065cb7cbaed817d7636cb2307d869c2d828c0e445e77b60994->leave($__internal_e0d822411a8750065cb7cbaed817d7636cb2307d869c2d828c0e445e77b60994_prof);

        
        $__internal_fa23ee4f02efd192163beaddcab705b35e37b712bd91a2f3158acbc6548c5f34->leave($__internal_fa23ee4f02efd192163beaddcab705b35e37b712bd91a2f3158acbc6548c5f34_prof);

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
