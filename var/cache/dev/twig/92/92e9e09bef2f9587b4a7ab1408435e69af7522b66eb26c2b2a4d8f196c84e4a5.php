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
        $__internal_21e7b46692452b2d1692dd23c4d0926293c5eae1f594bcdba5424e31bada4f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e7b46692452b2d1692dd23c4d0926293c5eae1f594bcdba5424e31bada4f6a->enter($__internal_21e7b46692452b2d1692dd23c4d0926293c5eae1f594bcdba5424e31bada4f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_6131ad8e699e114af5dd3c8f0d2a536c4bf2b8286dc14021f78f41bf3236615e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6131ad8e699e114af5dd3c8f0d2a536c4bf2b8286dc14021f78f41bf3236615e->enter($__internal_6131ad8e699e114af5dd3c8f0d2a536c4bf2b8286dc14021f78f41bf3236615e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21e7b46692452b2d1692dd23c4d0926293c5eae1f594bcdba5424e31bada4f6a->leave($__internal_21e7b46692452b2d1692dd23c4d0926293c5eae1f594bcdba5424e31bada4f6a_prof);

        
        $__internal_6131ad8e699e114af5dd3c8f0d2a536c4bf2b8286dc14021f78f41bf3236615e->leave($__internal_6131ad8e699e114af5dd3c8f0d2a536c4bf2b8286dc14021f78f41bf3236615e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff2da2b644c1b0ba34a5c5cbbbfc816f8a273d074f3c027da6652080c8c916a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2da2b644c1b0ba34a5c5cbbbfc816f8a273d074f3c027da6652080c8c916a9->enter($__internal_ff2da2b644c1b0ba34a5c5cbbbfc816f8a273d074f3c027da6652080c8c916a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_94418f34f70002540bcf3873910c3c5550a2e95434b502746525ba14d5f85c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94418f34f70002540bcf3873910c3c5550a2e95434b502746525ba14d5f85c17->enter($__internal_94418f34f70002540bcf3873910c3c5550a2e95434b502746525ba14d5f85c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_94418f34f70002540bcf3873910c3c5550a2e95434b502746525ba14d5f85c17->leave($__internal_94418f34f70002540bcf3873910c3c5550a2e95434b502746525ba14d5f85c17_prof);

        
        $__internal_ff2da2b644c1b0ba34a5c5cbbbfc816f8a273d074f3c027da6652080c8c916a9->leave($__internal_ff2da2b644c1b0ba34a5c5cbbbfc816f8a273d074f3c027da6652080c8c916a9_prof);

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
