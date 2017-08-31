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
        $__internal_5021e86d0d0ce849fb9371ad3905c9a3d1c7d0d0387b952e91e78a1117e904b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5021e86d0d0ce849fb9371ad3905c9a3d1c7d0d0387b952e91e78a1117e904b1->enter($__internal_5021e86d0d0ce849fb9371ad3905c9a3d1c7d0d0387b952e91e78a1117e904b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_a0b358cfb944407413af33bb6222ff34dd06d91e7a1cd1cf03d1159ce41dea68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b358cfb944407413af33bb6222ff34dd06d91e7a1cd1cf03d1159ce41dea68->enter($__internal_a0b358cfb944407413af33bb6222ff34dd06d91e7a1cd1cf03d1159ce41dea68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5021e86d0d0ce849fb9371ad3905c9a3d1c7d0d0387b952e91e78a1117e904b1->leave($__internal_5021e86d0d0ce849fb9371ad3905c9a3d1c7d0d0387b952e91e78a1117e904b1_prof);

        
        $__internal_a0b358cfb944407413af33bb6222ff34dd06d91e7a1cd1cf03d1159ce41dea68->leave($__internal_a0b358cfb944407413af33bb6222ff34dd06d91e7a1cd1cf03d1159ce41dea68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4d78c7f81ea70eab52b7dacd0d7b15663ccd171ec0b9c712d93b3ec1bb37897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d78c7f81ea70eab52b7dacd0d7b15663ccd171ec0b9c712d93b3ec1bb37897->enter($__internal_e4d78c7f81ea70eab52b7dacd0d7b15663ccd171ec0b9c712d93b3ec1bb37897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a7c1b566b0ff26227ac272aed6440a95f96794d3277ef56c9617b80cff4233e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c1b566b0ff26227ac272aed6440a95f96794d3277ef56c9617b80cff4233e9->enter($__internal_a7c1b566b0ff26227ac272aed6440a95f96794d3277ef56c9617b80cff4233e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_a7c1b566b0ff26227ac272aed6440a95f96794d3277ef56c9617b80cff4233e9->leave($__internal_a7c1b566b0ff26227ac272aed6440a95f96794d3277ef56c9617b80cff4233e9_prof);

        
        $__internal_e4d78c7f81ea70eab52b7dacd0d7b15663ccd171ec0b9c712d93b3ec1bb37897->leave($__internal_e4d78c7f81ea70eab52b7dacd0d7b15663ccd171ec0b9c712d93b3ec1bb37897_prof);

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
