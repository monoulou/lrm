<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0d4a7e0098e026616195d1cd428f9afc8c59d3f18b6f03c0c4311a5e29cc2354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_60a9692a5b5b416d13a1e85e79f27e9b4533d3e2a65bd222983f5c1604052ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a9692a5b5b416d13a1e85e79f27e9b4533d3e2a65bd222983f5c1604052ee3->enter($__internal_60a9692a5b5b416d13a1e85e79f27e9b4533d3e2a65bd222983f5c1604052ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_b82c5853e4c0b439dd00051ecb9814ba9fd75f052ae0e65639a321e80a8f344c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82c5853e4c0b439dd00051ecb9814ba9fd75f052ae0e65639a321e80a8f344c->enter($__internal_b82c5853e4c0b439dd00051ecb9814ba9fd75f052ae0e65639a321e80a8f344c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a9692a5b5b416d13a1e85e79f27e9b4533d3e2a65bd222983f5c1604052ee3->leave($__internal_60a9692a5b5b416d13a1e85e79f27e9b4533d3e2a65bd222983f5c1604052ee3_prof);

        
        $__internal_b82c5853e4c0b439dd00051ecb9814ba9fd75f052ae0e65639a321e80a8f344c->leave($__internal_b82c5853e4c0b439dd00051ecb9814ba9fd75f052ae0e65639a321e80a8f344c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_365c96ee8bb48420b8d70956613648d32e086ac41bc08768585d0478c34f0369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365c96ee8bb48420b8d70956613648d32e086ac41bc08768585d0478c34f0369->enter($__internal_365c96ee8bb48420b8d70956613648d32e086ac41bc08768585d0478c34f0369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1914c893d761e1e51f821763ef16605edf3e06c28971c1fbc0344043bef10155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1914c893d761e1e51f821763ef16605edf3e06c28971c1fbc0344043bef10155->enter($__internal_1914c893d761e1e51f821763ef16605edf3e06c28971c1fbc0344043bef10155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1914c893d761e1e51f821763ef16605edf3e06c28971c1fbc0344043bef10155->leave($__internal_1914c893d761e1e51f821763ef16605edf3e06c28971c1fbc0344043bef10155_prof);

        
        $__internal_365c96ee8bb48420b8d70956613648d32e086ac41bc08768585d0478c34f0369->leave($__internal_365c96ee8bb48420b8d70956613648d32e086ac41bc08768585d0478c34f0369_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
