<?php

/* @MAUser/Profile/show.html.twig */
class __TwigTemplate_d4a7fb9d8ebb6360c4e1b25baa71299f1ae5aea4f8bd925a255fbce83c062e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Profile/show.html.twig", 1);
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
        $__internal_58fbf2aba4f717174746272b1530ada468aea532c191d5c19f9b03fe45d751e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58fbf2aba4f717174746272b1530ada468aea532c191d5c19f9b03fe45d751e9->enter($__internal_58fbf2aba4f717174746272b1530ada468aea532c191d5c19f9b03fe45d751e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Profile/show.html.twig"));

        $__internal_76376c6a80285a59ef30709c98961ec2e6e9308d90f5e6472f770e680d7a3a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76376c6a80285a59ef30709c98961ec2e6e9308d90f5e6472f770e680d7a3a53->enter($__internal_76376c6a80285a59ef30709c98961ec2e6e9308d90f5e6472f770e680d7a3a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58fbf2aba4f717174746272b1530ada468aea532c191d5c19f9b03fe45d751e9->leave($__internal_58fbf2aba4f717174746272b1530ada468aea532c191d5c19f9b03fe45d751e9_prof);

        
        $__internal_76376c6a80285a59ef30709c98961ec2e6e9308d90f5e6472f770e680d7a3a53->leave($__internal_76376c6a80285a59ef30709c98961ec2e6e9308d90f5e6472f770e680d7a3a53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5cf472ce80cb000032cf86469439ab01da3b475d16af3771530748df8c2c21b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf472ce80cb000032cf86469439ab01da3b475d16af3771530748df8c2c21b6->enter($__internal_5cf472ce80cb000032cf86469439ab01da3b475d16af3771530748df8c2c21b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_477d0277858954908ee0c0e80101e77cff50ad71c6572d06fcf180265442e874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477d0277858954908ee0c0e80101e77cff50ad71c6572d06fcf180265442e874->enter($__internal_477d0277858954908ee0c0e80101e77cff50ad71c6572d06fcf180265442e874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@MAUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_477d0277858954908ee0c0e80101e77cff50ad71c6572d06fcf180265442e874->leave($__internal_477d0277858954908ee0c0e80101e77cff50ad71c6572d06fcf180265442e874_prof);

        
        $__internal_5cf472ce80cb000032cf86469439ab01da3b475d16af3771530748df8c2c21b6->leave($__internal_5cf472ce80cb000032cf86469439ab01da3b475d16af3771530748df8c2c21b6_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Profile/show.html.twig";
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
    {% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}", "@MAUser/Profile/show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
