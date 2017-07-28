<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e5e905a08de63d190931a289f4e94f996e70e0bbddea65d49a7866cecbbd0d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 2);
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
        $__internal_9a9a73f98804d3a41582994a5fda044e3a28afdf6020f26af8e30e2993bac03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9a73f98804d3a41582994a5fda044e3a28afdf6020f26af8e30e2993bac03e->enter($__internal_9a9a73f98804d3a41582994a5fda044e3a28afdf6020f26af8e30e2993bac03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_207f282d805b173e21969bb40ebe6e225eeb2c77b107cfb04057384482468234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207f282d805b173e21969bb40ebe6e225eeb2c77b107cfb04057384482468234->enter($__internal_207f282d805b173e21969bb40ebe6e225eeb2c77b107cfb04057384482468234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a9a73f98804d3a41582994a5fda044e3a28afdf6020f26af8e30e2993bac03e->leave($__internal_9a9a73f98804d3a41582994a5fda044e3a28afdf6020f26af8e30e2993bac03e_prof);

        
        $__internal_207f282d805b173e21969bb40ebe6e225eeb2c77b107cfb04057384482468234->leave($__internal_207f282d805b173e21969bb40ebe6e225eeb2c77b107cfb04057384482468234_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f0ee8e0fdd42cbc8a10767997799496c3291de4781dc038545cfc918979124b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0ee8e0fdd42cbc8a10767997799496c3291de4781dc038545cfc918979124b->enter($__internal_7f0ee8e0fdd42cbc8a10767997799496c3291de4781dc038545cfc918979124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aaf5e3e594a2d9f7b215690033da7a52dc5fa1661ae69e28d062b8f83c33cb89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf5e3e594a2d9f7b215690033da7a52dc5fa1661ae69e28d062b8f83c33cb89->enter($__internal_aaf5e3e594a2d9f7b215690033da7a52dc5fa1661ae69e28d062b8f83c33cb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_aaf5e3e594a2d9f7b215690033da7a52dc5fa1661ae69e28d062b8f83c33cb89->leave($__internal_aaf5e3e594a2d9f7b215690033da7a52dc5fa1661ae69e28d062b8f83c33cb89_prof);

        
        $__internal_7f0ee8e0fdd42cbc8a10767997799496c3291de4781dc038545cfc918979124b->leave($__internal_7f0ee8e0fdd42cbc8a10767997799496c3291de4781dc038545cfc918979124b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
