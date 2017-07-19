<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c352ead0b22f19a65079946f52d7c7c51cdb79d9a171f54de10e4e5c79e6f373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8616dd4bce3a037ab5b4d130de86932984c30202b7910107834a2196eb55761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8616dd4bce3a037ab5b4d130de86932984c30202b7910107834a2196eb55761->enter($__internal_e8616dd4bce3a037ab5b4d130de86932984c30202b7910107834a2196eb55761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_651e4535580852e1af9bed0591564986ea91dc109ba2727dfd796912c6c1ee06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651e4535580852e1af9bed0591564986ea91dc109ba2727dfd796912c6c1ee06->enter($__internal_651e4535580852e1af9bed0591564986ea91dc109ba2727dfd796912c6c1ee06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8616dd4bce3a037ab5b4d130de86932984c30202b7910107834a2196eb55761->leave($__internal_e8616dd4bce3a037ab5b4d130de86932984c30202b7910107834a2196eb55761_prof);

        
        $__internal_651e4535580852e1af9bed0591564986ea91dc109ba2727dfd796912c6c1ee06->leave($__internal_651e4535580852e1af9bed0591564986ea91dc109ba2727dfd796912c6c1ee06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05052fe74bcb6592c4c30b86e2b1d9986cf29dea1102e172e6efe720fea24e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05052fe74bcb6592c4c30b86e2b1d9986cf29dea1102e172e6efe720fea24e41->enter($__internal_05052fe74bcb6592c4c30b86e2b1d9986cf29dea1102e172e6efe720fea24e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e0f1b97dcd3e240c2b820b3ce3f52ddd9b9e58ee4826df61c89323ed39f4497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0f1b97dcd3e240c2b820b3ce3f52ddd9b9e58ee4826df61c89323ed39f4497->enter($__internal_8e0f1b97dcd3e240c2b820b3ce3f52ddd9b9e58ee4826df61c89323ed39f4497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8e0f1b97dcd3e240c2b820b3ce3f52ddd9b9e58ee4826df61c89323ed39f4497->leave($__internal_8e0f1b97dcd3e240c2b820b3ce3f52ddd9b9e58ee4826df61c89323ed39f4497_prof);

        
        $__internal_05052fe74bcb6592c4c30b86e2b1d9986cf29dea1102e172e6efe720fea24e41->leave($__internal_05052fe74bcb6592c4c30b86e2b1d9986cf29dea1102e172e6efe720fea24e41_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ef311da80741407252de856a3b231c1112180696b6ea6873867dba13c7c665f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef311da80741407252de856a3b231c1112180696b6ea6873867dba13c7c665f->enter($__internal_5ef311da80741407252de856a3b231c1112180696b6ea6873867dba13c7c665f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea75cdeec585d5611c84b6c6b6aae3e3a6bdd27361c086c66e76bcbd800efe83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea75cdeec585d5611c84b6c6b6aae3e3a6bdd27361c086c66e76bcbd800efe83->enter($__internal_ea75cdeec585d5611c84b6c6b6aae3e3a6bdd27361c086c66e76bcbd800efe83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ea75cdeec585d5611c84b6c6b6aae3e3a6bdd27361c086c66e76bcbd800efe83->leave($__internal_ea75cdeec585d5611c84b6c6b6aae3e3a6bdd27361c086c66e76bcbd800efe83_prof);

        
        $__internal_5ef311da80741407252de856a3b231c1112180696b6ea6873867dba13c7c665f->leave($__internal_5ef311da80741407252de856a3b231c1112180696b6ea6873867dba13c7c665f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
