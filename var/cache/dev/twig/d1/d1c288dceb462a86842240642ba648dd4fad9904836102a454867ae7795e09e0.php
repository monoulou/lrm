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
        $__internal_b6572574bd48704ea016cb73c9851e2cd7caab1f8a04d9e623ca5e41fbd95fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6572574bd48704ea016cb73c9851e2cd7caab1f8a04d9e623ca5e41fbd95fea->enter($__internal_b6572574bd48704ea016cb73c9851e2cd7caab1f8a04d9e623ca5e41fbd95fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_314da7276fd3d3aeb34a0863e1aa6309512b277064b5086dbce61a9a9d8445fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314da7276fd3d3aeb34a0863e1aa6309512b277064b5086dbce61a9a9d8445fe->enter($__internal_314da7276fd3d3aeb34a0863e1aa6309512b277064b5086dbce61a9a9d8445fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6572574bd48704ea016cb73c9851e2cd7caab1f8a04d9e623ca5e41fbd95fea->leave($__internal_b6572574bd48704ea016cb73c9851e2cd7caab1f8a04d9e623ca5e41fbd95fea_prof);

        
        $__internal_314da7276fd3d3aeb34a0863e1aa6309512b277064b5086dbce61a9a9d8445fe->leave($__internal_314da7276fd3d3aeb34a0863e1aa6309512b277064b5086dbce61a9a9d8445fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_046ef692adbc6b7420a2589b52818b141ca321c14dfeb29d9ef7e44dd99dafe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046ef692adbc6b7420a2589b52818b141ca321c14dfeb29d9ef7e44dd99dafe6->enter($__internal_046ef692adbc6b7420a2589b52818b141ca321c14dfeb29d9ef7e44dd99dafe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0d6e827e08c7694b2b39a7f3152bea61c155ddbe78a2a3b45ef4e2b0150f76c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6e827e08c7694b2b39a7f3152bea61c155ddbe78a2a3b45ef4e2b0150f76c6->enter($__internal_0d6e827e08c7694b2b39a7f3152bea61c155ddbe78a2a3b45ef4e2b0150f76c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_0d6e827e08c7694b2b39a7f3152bea61c155ddbe78a2a3b45ef4e2b0150f76c6->leave($__internal_0d6e827e08c7694b2b39a7f3152bea61c155ddbe78a2a3b45ef4e2b0150f76c6_prof);

        
        $__internal_046ef692adbc6b7420a2589b52818b141ca321c14dfeb29d9ef7e44dd99dafe6->leave($__internal_046ef692adbc6b7420a2589b52818b141ca321c14dfeb29d9ef7e44dd99dafe6_prof);

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
