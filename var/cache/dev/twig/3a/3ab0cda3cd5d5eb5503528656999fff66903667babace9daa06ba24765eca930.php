<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_13fe1726cf9788d239f24e1762fa2b2d5c55c39edeaa04ed480d6328a17b1de9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_120f1d7cca73e613abbce50e8aac4549e4466d31b7ff8f1bea98431260acf7b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120f1d7cca73e613abbce50e8aac4549e4466d31b7ff8f1bea98431260acf7b0->enter($__internal_120f1d7cca73e613abbce50e8aac4549e4466d31b7ff8f1bea98431260acf7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_273b9e9e29d08b6e4660fd876af7ded737b0ca49fe0d5721b58e6c12cc624082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273b9e9e29d08b6e4660fd876af7ded737b0ca49fe0d5721b58e6c12cc624082->enter($__internal_273b9e9e29d08b6e4660fd876af7ded737b0ca49fe0d5721b58e6c12cc624082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_120f1d7cca73e613abbce50e8aac4549e4466d31b7ff8f1bea98431260acf7b0->leave($__internal_120f1d7cca73e613abbce50e8aac4549e4466d31b7ff8f1bea98431260acf7b0_prof);

        
        $__internal_273b9e9e29d08b6e4660fd876af7ded737b0ca49fe0d5721b58e6c12cc624082->leave($__internal_273b9e9e29d08b6e4660fd876af7ded737b0ca49fe0d5721b58e6c12cc624082_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e03a34cab26e483ab6c472d0165d17d503fc30daae9e894bd69561729c98eb89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03a34cab26e483ab6c472d0165d17d503fc30daae9e894bd69561729c98eb89->enter($__internal_e03a34cab26e483ab6c472d0165d17d503fc30daae9e894bd69561729c98eb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_835f2b7848c24e3b36f25f4443714c94489642d598e110db36fa2a04cf30e83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835f2b7848c24e3b36f25f4443714c94489642d598e110db36fa2a04cf30e83a->enter($__internal_835f2b7848c24e3b36f25f4443714c94489642d598e110db36fa2a04cf30e83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_835f2b7848c24e3b36f25f4443714c94489642d598e110db36fa2a04cf30e83a->leave($__internal_835f2b7848c24e3b36f25f4443714c94489642d598e110db36fa2a04cf30e83a_prof);

        
        $__internal_e03a34cab26e483ab6c472d0165d17d503fc30daae9e894bd69561729c98eb89->leave($__internal_e03a34cab26e483ab6c472d0165d17d503fc30daae9e894bd69561729c98eb89_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
