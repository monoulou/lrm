<?php

/* MAUserBundle:Profile:show.html.twig */
class __TwigTemplate_35406ecdd17df56796dfd7f79c6295c00ef0482363676eb2429350be7d5f11ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Profile:show.html.twig", 1);
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
        $__internal_fcce5c042d9dc0e0a84b5c97f113de57d759cfaf4a7c1e82a0ef067d66f035bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcce5c042d9dc0e0a84b5c97f113de57d759cfaf4a7c1e82a0ef067d66f035bb->enter($__internal_fcce5c042d9dc0e0a84b5c97f113de57d759cfaf4a7c1e82a0ef067d66f035bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Profile:show.html.twig"));

        $__internal_cad48bbd6626b33059544eba42416d91845896a145434f16da7f2d9eeb32e0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad48bbd6626b33059544eba42416d91845896a145434f16da7f2d9eeb32e0b2->enter($__internal_cad48bbd6626b33059544eba42416d91845896a145434f16da7f2d9eeb32e0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcce5c042d9dc0e0a84b5c97f113de57d759cfaf4a7c1e82a0ef067d66f035bb->leave($__internal_fcce5c042d9dc0e0a84b5c97f113de57d759cfaf4a7c1e82a0ef067d66f035bb_prof);

        
        $__internal_cad48bbd6626b33059544eba42416d91845896a145434f16da7f2d9eeb32e0b2->leave($__internal_cad48bbd6626b33059544eba42416d91845896a145434f16da7f2d9eeb32e0b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bfd30f2c5c2b28a746528c27b3f9fc8a44df6be66d6ad616aa6051da0ba10ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfd30f2c5c2b28a746528c27b3f9fc8a44df6be66d6ad616aa6051da0ba10ff->enter($__internal_1bfd30f2c5c2b28a746528c27b3f9fc8a44df6be66d6ad616aa6051da0ba10ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_316400bb362cdca512798c0e1f3dcfc3bf4f7172323bb056d766e0f8e2bd20d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316400bb362cdca512798c0e1f3dcfc3bf4f7172323bb056d766e0f8e2bd20d9->enter($__internal_316400bb362cdca512798c0e1f3dcfc3bf4f7172323bb056d766e0f8e2bd20d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "MAUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_316400bb362cdca512798c0e1f3dcfc3bf4f7172323bb056d766e0f8e2bd20d9->leave($__internal_316400bb362cdca512798c0e1f3dcfc3bf4f7172323bb056d766e0f8e2bd20d9_prof);

        
        $__internal_1bfd30f2c5c2b28a746528c27b3f9fc8a44df6be66d6ad616aa6051da0ba10ff->leave($__internal_1bfd30f2c5c2b28a746528c27b3f9fc8a44df6be66d6ad616aa6051da0ba10ff_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Profile:show.html.twig";
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
    {% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
