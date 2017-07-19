<?php

/* MAUserBundle:Registration:register.html.twig */
class __TwigTemplate_27837feb3b2471e09871860973fd0dedf50159248cbf3aec9307514e0b2e38ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Registration:register.html.twig", 1);
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
        $__internal_7653e5227c12799091a934853511c6cec612d516a7b22f8fa55a63c4929588b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7653e5227c12799091a934853511c6cec612d516a7b22f8fa55a63c4929588b6->enter($__internal_7653e5227c12799091a934853511c6cec612d516a7b22f8fa55a63c4929588b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:register.html.twig"));

        $__internal_d2d610d097dab7525173f7a3f5453555dac17bc1695f058cb5cd9679835334e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d610d097dab7525173f7a3f5453555dac17bc1695f058cb5cd9679835334e0->enter($__internal_d2d610d097dab7525173f7a3f5453555dac17bc1695f058cb5cd9679835334e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7653e5227c12799091a934853511c6cec612d516a7b22f8fa55a63c4929588b6->leave($__internal_7653e5227c12799091a934853511c6cec612d516a7b22f8fa55a63c4929588b6_prof);

        
        $__internal_d2d610d097dab7525173f7a3f5453555dac17bc1695f058cb5cd9679835334e0->leave($__internal_d2d610d097dab7525173f7a3f5453555dac17bc1695f058cb5cd9679835334e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13b28429a91769adb5fa36117d25ab29d8509280d102320bd84b09996f1f1594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b28429a91769adb5fa36117d25ab29d8509280d102320bd84b09996f1f1594->enter($__internal_13b28429a91769adb5fa36117d25ab29d8509280d102320bd84b09996f1f1594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d722182a04d6ae228d3e76279e86933ab23f3cc70e983bbecddf267615c6d889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d722182a04d6ae228d3e76279e86933ab23f3cc70e983bbecddf267615c6d889->enter($__internal_d722182a04d6ae228d3e76279e86933ab23f3cc70e983bbecddf267615c6d889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "MAUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d722182a04d6ae228d3e76279e86933ab23f3cc70e983bbecddf267615c6d889->leave($__internal_d722182a04d6ae228d3e76279e86933ab23f3cc70e983bbecddf267615c6d889_prof);

        
        $__internal_13b28429a91769adb5fa36117d25ab29d8509280d102320bd84b09996f1f1594->leave($__internal_13b28429a91769adb5fa36117d25ab29d8509280d102320bd84b09996f1f1594_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Registration:register.html.twig";
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
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
