<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_f9624f853096ebbb7f207315d04500b89faa3fab0aea5b77752e0b8072d19ee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_29d80ad4d9f020865c52ef2d2a4fc611fb09993f5117e92bef21a1921e2443ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d80ad4d9f020865c52ef2d2a4fc611fb09993f5117e92bef21a1921e2443ee->enter($__internal_29d80ad4d9f020865c52ef2d2a4fc611fb09993f5117e92bef21a1921e2443ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_70bd03edf319f599fab13a5551d438224c06f8d1c05d9cf7a0f3f331cc46ca4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70bd03edf319f599fab13a5551d438224c06f8d1c05d9cf7a0f3f331cc46ca4b->enter($__internal_70bd03edf319f599fab13a5551d438224c06f8d1c05d9cf7a0f3f331cc46ca4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d80ad4d9f020865c52ef2d2a4fc611fb09993f5117e92bef21a1921e2443ee->leave($__internal_29d80ad4d9f020865c52ef2d2a4fc611fb09993f5117e92bef21a1921e2443ee_prof);

        
        $__internal_70bd03edf319f599fab13a5551d438224c06f8d1c05d9cf7a0f3f331cc46ca4b->leave($__internal_70bd03edf319f599fab13a5551d438224c06f8d1c05d9cf7a0f3f331cc46ca4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25ac612e1bd11ac5948510e4a271fee097f111a281273af7db5dc7b5f2d077fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ac612e1bd11ac5948510e4a271fee097f111a281273af7db5dc7b5f2d077fa->enter($__internal_25ac612e1bd11ac5948510e4a271fee097f111a281273af7db5dc7b5f2d077fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ed050cc1c03df00b94b94b18d309d161baf3fb7ceb13df512508b982e10fb0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed050cc1c03df00b94b94b18d309d161baf3fb7ceb13df512508b982e10fb0a9->enter($__internal_ed050cc1c03df00b94b94b18d309d161baf3fb7ceb13df512508b982e10fb0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_ed050cc1c03df00b94b94b18d309d161baf3fb7ceb13df512508b982e10fb0a9->leave($__internal_ed050cc1c03df00b94b94b18d309d161baf3fb7ceb13df512508b982e10fb0a9_prof);

        
        $__internal_25ac612e1bd11ac5948510e4a271fee097f111a281273af7db5dc7b5f2d077fa->leave($__internal_25ac612e1bd11ac5948510e4a271fee097f111a281273af7db5dc7b5f2d077fa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
