<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dfacee0a4cbd9a17ca70c6bcc8c1cffc78e874f3bc43de73b631023d8f14d61e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_80f8dc6a5a8859305d7d1437adb62c9eb8264dbd5c5aa71bf029eb4f4f156228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f8dc6a5a8859305d7d1437adb62c9eb8264dbd5c5aa71bf029eb4f4f156228->enter($__internal_80f8dc6a5a8859305d7d1437adb62c9eb8264dbd5c5aa71bf029eb4f4f156228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_3e9b7250a69bb18822c03c3ca1bb9dcc266155af87eb60b3d4bac7cad2455d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9b7250a69bb18822c03c3ca1bb9dcc266155af87eb60b3d4bac7cad2455d9a->enter($__internal_3e9b7250a69bb18822c03c3ca1bb9dcc266155af87eb60b3d4bac7cad2455d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f8dc6a5a8859305d7d1437adb62c9eb8264dbd5c5aa71bf029eb4f4f156228->leave($__internal_80f8dc6a5a8859305d7d1437adb62c9eb8264dbd5c5aa71bf029eb4f4f156228_prof);

        
        $__internal_3e9b7250a69bb18822c03c3ca1bb9dcc266155af87eb60b3d4bac7cad2455d9a->leave($__internal_3e9b7250a69bb18822c03c3ca1bb9dcc266155af87eb60b3d4bac7cad2455d9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e430c5c8c544f4842ab5562e34292619603a13da08a8db28c319e8b3cd50733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e430c5c8c544f4842ab5562e34292619603a13da08a8db28c319e8b3cd50733->enter($__internal_6e430c5c8c544f4842ab5562e34292619603a13da08a8db28c319e8b3cd50733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_443ce67ffa886e469963c7852a942a6752354e9e25cf4403940141f5d3d5bf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443ce67ffa886e469963c7852a942a6752354e9e25cf4403940141f5d3d5bf10->enter($__internal_443ce67ffa886e469963c7852a942a6752354e9e25cf4403940141f5d3d5bf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_443ce67ffa886e469963c7852a942a6752354e9e25cf4403940141f5d3d5bf10->leave($__internal_443ce67ffa886e469963c7852a942a6752354e9e25cf4403940141f5d3d5bf10_prof);

        
        $__internal_6e430c5c8c544f4842ab5562e34292619603a13da08a8db28c319e8b3cd50733->leave($__internal_6e430c5c8c544f4842ab5562e34292619603a13da08a8db28c319e8b3cd50733_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
