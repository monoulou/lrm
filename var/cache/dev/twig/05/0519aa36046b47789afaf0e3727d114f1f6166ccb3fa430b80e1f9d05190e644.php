<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_be86a5a82cb726c774d4c80603da8532662fd579e82ada2f5ae013f6379211fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_438baec13b0a042120cd215ccb1f51ca7e2e45fba89c3423349dedf5b640b18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438baec13b0a042120cd215ccb1f51ca7e2e45fba89c3423349dedf5b640b18e->enter($__internal_438baec13b0a042120cd215ccb1f51ca7e2e45fba89c3423349dedf5b640b18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_cc4e00237c355559079f2d7420e96a55bdf1808262443fa6c636b80d3186f770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4e00237c355559079f2d7420e96a55bdf1808262443fa6c636b80d3186f770->enter($__internal_cc4e00237c355559079f2d7420e96a55bdf1808262443fa6c636b80d3186f770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_438baec13b0a042120cd215ccb1f51ca7e2e45fba89c3423349dedf5b640b18e->leave($__internal_438baec13b0a042120cd215ccb1f51ca7e2e45fba89c3423349dedf5b640b18e_prof);

        
        $__internal_cc4e00237c355559079f2d7420e96a55bdf1808262443fa6c636b80d3186f770->leave($__internal_cc4e00237c355559079f2d7420e96a55bdf1808262443fa6c636b80d3186f770_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_367624bc2506ac9038a438b5f637141b834c9a91001596b5bbc513ba94d9b44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367624bc2506ac9038a438b5f637141b834c9a91001596b5bbc513ba94d9b44d->enter($__internal_367624bc2506ac9038a438b5f637141b834c9a91001596b5bbc513ba94d9b44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c5aad1e374455dfe43e1ae6b2edff08a4f622d8cf4bbad6ab14d6b1926277ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5aad1e374455dfe43e1ae6b2edff08a4f622d8cf4bbad6ab14d6b1926277ea2->enter($__internal_c5aad1e374455dfe43e1ae6b2edff08a4f622d8cf4bbad6ab14d6b1926277ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c5aad1e374455dfe43e1ae6b2edff08a4f622d8cf4bbad6ab14d6b1926277ea2->leave($__internal_c5aad1e374455dfe43e1ae6b2edff08a4f622d8cf4bbad6ab14d6b1926277ea2_prof);

        
        $__internal_367624bc2506ac9038a438b5f637141b834c9a91001596b5bbc513ba94d9b44d->leave($__internal_367624bc2506ac9038a438b5f637141b834c9a91001596b5bbc513ba94d9b44d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
