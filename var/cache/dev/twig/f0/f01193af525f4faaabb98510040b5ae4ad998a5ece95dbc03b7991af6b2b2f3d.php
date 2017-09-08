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
        $__internal_dd14a05f725c57e35e34d55c73790b0bb2240297bad69877f52ef88b5820b123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd14a05f725c57e35e34d55c73790b0bb2240297bad69877f52ef88b5820b123->enter($__internal_dd14a05f725c57e35e34d55c73790b0bb2240297bad69877f52ef88b5820b123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_41267326acc03ae92671d59ebefe552d7b62a025b1c37c85fd0ac12bbcb7b13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41267326acc03ae92671d59ebefe552d7b62a025b1c37c85fd0ac12bbcb7b13d->enter($__internal_41267326acc03ae92671d59ebefe552d7b62a025b1c37c85fd0ac12bbcb7b13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd14a05f725c57e35e34d55c73790b0bb2240297bad69877f52ef88b5820b123->leave($__internal_dd14a05f725c57e35e34d55c73790b0bb2240297bad69877f52ef88b5820b123_prof);

        
        $__internal_41267326acc03ae92671d59ebefe552d7b62a025b1c37c85fd0ac12bbcb7b13d->leave($__internal_41267326acc03ae92671d59ebefe552d7b62a025b1c37c85fd0ac12bbcb7b13d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd7ebb198c94d95d2bc4999ef288e49f00b573698c802b48660d66e406f80fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7ebb198c94d95d2bc4999ef288e49f00b573698c802b48660d66e406f80fdd->enter($__internal_dd7ebb198c94d95d2bc4999ef288e49f00b573698c802b48660d66e406f80fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_911181a7a9530dbe41aaccb077bee203690f01ad4d5a7aacfd0ff913c7ce05d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911181a7a9530dbe41aaccb077bee203690f01ad4d5a7aacfd0ff913c7ce05d3->enter($__internal_911181a7a9530dbe41aaccb077bee203690f01ad4d5a7aacfd0ff913c7ce05d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_911181a7a9530dbe41aaccb077bee203690f01ad4d5a7aacfd0ff913c7ce05d3->leave($__internal_911181a7a9530dbe41aaccb077bee203690f01ad4d5a7aacfd0ff913c7ce05d3_prof);

        
        $__internal_dd7ebb198c94d95d2bc4999ef288e49f00b573698c802b48660d66e406f80fdd->leave($__internal_dd7ebb198c94d95d2bc4999ef288e49f00b573698c802b48660d66e406f80fdd_prof);

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
