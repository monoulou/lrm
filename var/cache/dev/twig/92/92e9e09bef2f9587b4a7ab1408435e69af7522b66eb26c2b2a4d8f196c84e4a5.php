<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a96c59af2175f88fa5806e72058fa1fbada270b47a420fd832274b4980b3b31c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_4ce0926428ea93ee6997ee248bdcc6b6a5d181d66fba5f12e2aad3f0a91c692d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce0926428ea93ee6997ee248bdcc6b6a5d181d66fba5f12e2aad3f0a91c692d->enter($__internal_4ce0926428ea93ee6997ee248bdcc6b6a5d181d66fba5f12e2aad3f0a91c692d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_2489c1ab41ce3c5205baba158a4cb07ae0893b5148055280ecc15a91ca152c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2489c1ab41ce3c5205baba158a4cb07ae0893b5148055280ecc15a91ca152c53->enter($__internal_2489c1ab41ce3c5205baba158a4cb07ae0893b5148055280ecc15a91ca152c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ce0926428ea93ee6997ee248bdcc6b6a5d181d66fba5f12e2aad3f0a91c692d->leave($__internal_4ce0926428ea93ee6997ee248bdcc6b6a5d181d66fba5f12e2aad3f0a91c692d_prof);

        
        $__internal_2489c1ab41ce3c5205baba158a4cb07ae0893b5148055280ecc15a91ca152c53->leave($__internal_2489c1ab41ce3c5205baba158a4cb07ae0893b5148055280ecc15a91ca152c53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fd538af1caf1e0c94a55a7d12a8a641112118368a7680123f231b941ddfe925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd538af1caf1e0c94a55a7d12a8a641112118368a7680123f231b941ddfe925->enter($__internal_9fd538af1caf1e0c94a55a7d12a8a641112118368a7680123f231b941ddfe925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_10d9165a87afb70187ffd902c1b49de3ad874a2408a4b2ad520b136bdabaa521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d9165a87afb70187ffd902c1b49de3ad874a2408a4b2ad520b136bdabaa521->enter($__internal_10d9165a87afb70187ffd902c1b49de3ad874a2408a4b2ad520b136bdabaa521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_10d9165a87afb70187ffd902c1b49de3ad874a2408a4b2ad520b136bdabaa521->leave($__internal_10d9165a87afb70187ffd902c1b49de3ad874a2408a4b2ad520b136bdabaa521_prof);

        
        $__internal_9fd538af1caf1e0c94a55a7d12a8a641112118368a7680123f231b941ddfe925->leave($__internal_9fd538af1caf1e0c94a55a7d12a8a641112118368a7680123f231b941ddfe925_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
