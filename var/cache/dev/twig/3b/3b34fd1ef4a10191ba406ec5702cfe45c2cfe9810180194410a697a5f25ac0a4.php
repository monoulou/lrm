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
        $__internal_2b26dd828f2689ba25727f6f2040b04afbb9c4e5d97e1d5584b7e6fc66246b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b26dd828f2689ba25727f6f2040b04afbb9c4e5d97e1d5584b7e6fc66246b45->enter($__internal_2b26dd828f2689ba25727f6f2040b04afbb9c4e5d97e1d5584b7e6fc66246b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_5a8bcb3ca8a297cf96a1c49f3a0636dd714113cf85a336a11ca9ecadd7bcf391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8bcb3ca8a297cf96a1c49f3a0636dd714113cf85a336a11ca9ecadd7bcf391->enter($__internal_5a8bcb3ca8a297cf96a1c49f3a0636dd714113cf85a336a11ca9ecadd7bcf391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b26dd828f2689ba25727f6f2040b04afbb9c4e5d97e1d5584b7e6fc66246b45->leave($__internal_2b26dd828f2689ba25727f6f2040b04afbb9c4e5d97e1d5584b7e6fc66246b45_prof);

        
        $__internal_5a8bcb3ca8a297cf96a1c49f3a0636dd714113cf85a336a11ca9ecadd7bcf391->leave($__internal_5a8bcb3ca8a297cf96a1c49f3a0636dd714113cf85a336a11ca9ecadd7bcf391_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_301b25ffb79ea25bfcec4894328cefcf20946880ba5b952554b1f5ed1217fbac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301b25ffb79ea25bfcec4894328cefcf20946880ba5b952554b1f5ed1217fbac->enter($__internal_301b25ffb79ea25bfcec4894328cefcf20946880ba5b952554b1f5ed1217fbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8b2ff8737654c26c4c98fcdb07425af8422a77589a5b44c044dcf1f3890558e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2ff8737654c26c4c98fcdb07425af8422a77589a5b44c044dcf1f3890558e0->enter($__internal_8b2ff8737654c26c4c98fcdb07425af8422a77589a5b44c044dcf1f3890558e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8b2ff8737654c26c4c98fcdb07425af8422a77589a5b44c044dcf1f3890558e0->leave($__internal_8b2ff8737654c26c4c98fcdb07425af8422a77589a5b44c044dcf1f3890558e0_prof);

        
        $__internal_301b25ffb79ea25bfcec4894328cefcf20946880ba5b952554b1f5ed1217fbac->leave($__internal_301b25ffb79ea25bfcec4894328cefcf20946880ba5b952554b1f5ed1217fbac_prof);

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
