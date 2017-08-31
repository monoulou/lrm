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
        $__internal_627a5f03abcfea09a9144129435ba910ffae9553f9ad1e47004826221b47b166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627a5f03abcfea09a9144129435ba910ffae9553f9ad1e47004826221b47b166->enter($__internal_627a5f03abcfea09a9144129435ba910ffae9553f9ad1e47004826221b47b166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_aa7cd130307a2576aa19c876e8b83f4e6358e545a274defd98d5b033e155cb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7cd130307a2576aa19c876e8b83f4e6358e545a274defd98d5b033e155cb53->enter($__internal_aa7cd130307a2576aa19c876e8b83f4e6358e545a274defd98d5b033e155cb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_627a5f03abcfea09a9144129435ba910ffae9553f9ad1e47004826221b47b166->leave($__internal_627a5f03abcfea09a9144129435ba910ffae9553f9ad1e47004826221b47b166_prof);

        
        $__internal_aa7cd130307a2576aa19c876e8b83f4e6358e545a274defd98d5b033e155cb53->leave($__internal_aa7cd130307a2576aa19c876e8b83f4e6358e545a274defd98d5b033e155cb53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb13627453130b1135bd3137677f1cb2560772643c354ced1ad9ef9b0c4ded1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb13627453130b1135bd3137677f1cb2560772643c354ced1ad9ef9b0c4ded1d->enter($__internal_eb13627453130b1135bd3137677f1cb2560772643c354ced1ad9ef9b0c4ded1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9d78dbcf6df207498cda437920969fc6e2c758ae3870b4dfdcb19e7100ea0cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d78dbcf6df207498cda437920969fc6e2c758ae3870b4dfdcb19e7100ea0cac->enter($__internal_9d78dbcf6df207498cda437920969fc6e2c758ae3870b4dfdcb19e7100ea0cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_9d78dbcf6df207498cda437920969fc6e2c758ae3870b4dfdcb19e7100ea0cac->leave($__internal_9d78dbcf6df207498cda437920969fc6e2c758ae3870b4dfdcb19e7100ea0cac_prof);

        
        $__internal_eb13627453130b1135bd3137677f1cb2560772643c354ced1ad9ef9b0c4ded1d->leave($__internal_eb13627453130b1135bd3137677f1cb2560772643c354ced1ad9ef9b0c4ded1d_prof);

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
