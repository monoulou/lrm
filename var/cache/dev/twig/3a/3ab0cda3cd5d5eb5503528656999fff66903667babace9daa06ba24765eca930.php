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
        $__internal_b472686cb557a021732d6b75e50ed116e594a58a3a652e919c256a5815c8239e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b472686cb557a021732d6b75e50ed116e594a58a3a652e919c256a5815c8239e->enter($__internal_b472686cb557a021732d6b75e50ed116e594a58a3a652e919c256a5815c8239e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_6b1bbfb4ee3c221812c6a4cb67ac23a1809cbbc48e623a1967527d5bccde955a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1bbfb4ee3c221812c6a4cb67ac23a1809cbbc48e623a1967527d5bccde955a->enter($__internal_6b1bbfb4ee3c221812c6a4cb67ac23a1809cbbc48e623a1967527d5bccde955a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b472686cb557a021732d6b75e50ed116e594a58a3a652e919c256a5815c8239e->leave($__internal_b472686cb557a021732d6b75e50ed116e594a58a3a652e919c256a5815c8239e_prof);

        
        $__internal_6b1bbfb4ee3c221812c6a4cb67ac23a1809cbbc48e623a1967527d5bccde955a->leave($__internal_6b1bbfb4ee3c221812c6a4cb67ac23a1809cbbc48e623a1967527d5bccde955a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6510ecec874c5a38a833739f153d175063dc1ea5a97c918ba5f2dc70b25943b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6510ecec874c5a38a833739f153d175063dc1ea5a97c918ba5f2dc70b25943b->enter($__internal_f6510ecec874c5a38a833739f153d175063dc1ea5a97c918ba5f2dc70b25943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a8d429ccbc2df9af84d21d70223e716fad63e76316837bd58890dedb78298ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8d429ccbc2df9af84d21d70223e716fad63e76316837bd58890dedb78298ef->enter($__internal_4a8d429ccbc2df9af84d21d70223e716fad63e76316837bd58890dedb78298ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_4a8d429ccbc2df9af84d21d70223e716fad63e76316837bd58890dedb78298ef->leave($__internal_4a8d429ccbc2df9af84d21d70223e716fad63e76316837bd58890dedb78298ef_prof);

        
        $__internal_f6510ecec874c5a38a833739f153d175063dc1ea5a97c918ba5f2dc70b25943b->leave($__internal_f6510ecec874c5a38a833739f153d175063dc1ea5a97c918ba5f2dc70b25943b_prof);

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
